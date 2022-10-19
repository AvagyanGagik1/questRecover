<?php

namespace App\Http\Helpers\UI\Crud\Traits;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait ImageTrait
{
    /**
     * upload image
     * @param string $path
     * @param $image
     * @param string|null $color
     * @return string
     */
    public function uploadImage(string $path, $image, string $color = null): string
    {
        if (!file_exists(public_path('images') . '/' . $path)) {
            mkdir(public_path('images') . '/' . $path, 0777, true);
        }
        $originalPath = '/images' . '/' . $path;
        $path = public_path('images') . '/' . $path;
        $filename = '/' . time() . microtime(true) . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image);
        $img->save($path . $filename);

        return $originalPath . $filename;
    }

    /**
     * remove image
     * @param $image
     * @return bool
     **/
    public function deleteImage($image): bool
    {
        $file = public_path($image);
        if ($file) {
            File::delete($file);
            return true;
        }
        return false;
    }

    /**
     * @param string $path
     * @param $image
     * @return string
     */
    public function uploadImageDataUrl(string $path, $image): string
    {
        $filename = $path . '/' . preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
//        Image::make($image)->resize(300, 400)->save(public_path($filename));
        Image::make($image)->save(public_path($filename));
        return $filename;
    }

    /**
     * @param string $path
     * @param $image
     * @return string
     */
    public function imageResizeFit(string $path, $image): string
    {
        $filename = $path . '/' . time() . microtime(true) . '.' . $image->getClientOriginalExtension();
        $image = Image::make($image);
        $img = Image::make($image);
        $img->fit(800, 600, function ($constrain) {
            $constrain->upsize();
        });
        $img->save(public_path($filename));
        return $filename;
    }

    public function uploadImageDataUrlSized(string $path, $image, $x, $y): string
    {
        $filename = $path . '/' . preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
        Image::make($image)->resize($x, $y)->save(public_path($filename));
//        Image::make($image)->save(public_path($filename));
        return $filename;
    }

    public function createUserImage(string $text): string
    {
//        return public_path('/GDFonts/RobotoMono.ttf');
        $img = Image::canvas(50, 50, '#f8bbd0');
        $img->text($text, 25, 15, function ($font) {
            $font->file(public_path('/GDFonts/RobotoMono.ttf'));
            $font->color('#FFFFFF');
            $font->size(24);
            $font->align('center');
            $font->valign('top');
        });
        $img->save(public_path('/images/avatar/' . microtime() . '.png'));
        return '/images/avatar/' . $img->filename . '.png';
    }
}

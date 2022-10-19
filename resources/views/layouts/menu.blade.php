<li class="nav-item">
    <a href="{{ route('admin.index') }}" class="nav-link {{request()->route()->getName() === 'admin.index'?'active':''}}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.benefit') }}" class="nav-link {{request()->route()->getName() === 'admin.benefit'?'active':''}}">
        <i class="nav-icon fas fa-home"></i>
        <p>Benefits</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.callback') }}" class="nav-link {{request()->route()->getName() === 'admin.callback'?'active':''}}">
        <i class="nav-icon fas fa-home"></i>
        <p>Callback Request</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admissions.index') }}" class="nav-link {{request()->route()->getName() === 'admissions.index'?'active':''}}">
        <i class="nav-icon fas fa-ticket-alt"></i>
        <p>Admissions</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('contact.index') }}" class="nav-link {{request()->route()->getName() === 'contact.index'?'active':''}}">
        <i class="nav-icon fas fa-address-book"></i>
        <p>Contact</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('career.index') }}" class="nav-link {{request()->route()->getName() === 'career.index'?'active':''}}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Career</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('partners.index') }}" class="nav-link {{request()->route()->getName() === 'partners.index'?'active':''}}">
        <i class="nav-icon fas fa-handshake"></i>
        <p>Partners</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('story.index') }}" class="nav-link {{request()->route()->getName() === 'story.index'?'active':''}}">
        <i class="nav-icon fas fa-book"></i>
        <p>Story</p>
    </a>
</li>
<li class="nav-item @if(request()->route()->getName() === 'about.index' || request()->route()->getName() === 'aboutDescription.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'about.index' || request()->route()->getName() === 'aboutDescription.index'?'active':''}}">
        <i class="nav-icon far fa-address-card"></i>
        <p>
            About
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link {{request()->route()->getName() === 'about.index'?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>About</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('aboutDescription.index') }}" class="nav-link {{request()->route()->getName() === 'aboutDescription.index'?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>About Description</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item @if(request()->route()->getName() === 'homeVideo.index' || request()->route()->getName() === 'home.index' || request()->route()->getName() === 'homeDescription.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'homeVideo.index' || request()->route()->getName() === 'home.index' || request()->route()->getName() === 'homeDescription.index'?'active':''}}">
        <i class="nav-icon far fa-address-card"></i>
        <p>
            Home
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link {{request()->route()->getName() === 'home.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('homeDescription.index') }}" class="nav-link {{request()->route()->getName() === 'homeDescription.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
                <p>Home Description</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('homeVideo.index') }}" class="nav-link {{request()->route()->getName() === 'homeVideo.index'?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
                <p>Home Video</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item @if(request()->route()->getName() === 'blog.index' || request()->route()->getName() === 'article.index' || request()->route()->getName() === 'content.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'blog.index' || request()->route()->getName() === 'article.index' || request()->route()->getName() === 'content.index'?'active':''}}">
        <i class="nav-icon far fa-newspaper"></i>
        <p>
            Blog
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('blog.index') }}" class="nav-link {{request()->route()->getName() === 'blog.index'?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Blog</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('article.index') }}" class="nav-link {{request()->route()->getName() === 'article.index'?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Article</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('content.index') }}" class="nav-link {{request()->route()->getName() === 'content.index'?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Content</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item @if(request()->route()->getName() === 'position.index' || request()->route()->getName() === 'teamType.index' || request()->route()->getName() === 'team.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'position.index' || request()->route()->getName() === 'teamType.index' || request()->route()->getName() === 'team.index'?'active':''}}">
        <i class="nav-icon fas fa-people-carry"></i>
        <p>
            Team
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('position.index') }}" class="nav-link {{request()->route()->getName() === 'position.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Position</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('teamType.index') }}" class="nav-link {{request()->route()->getName() === 'teamType.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Team Type</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('team.index') }}" class="nav-link {{request()->route()->getName() === 'team.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Team Member</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item @if(request()->route()->getName() === 'testimonials.index' || request()->route()->getName() === 'testimonialsHistory.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'testimonials.index' || request()->route()->getName() === 'testimonialsHistory.index'?'active':''}}">
        <i class="nav-icon fas fa-eye"></i>
        <p>
            Testimonials
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('testimonials.index') }}" class="nav-link {{request()->route()->getName() === 'testimonials.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Testimonials</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('testimonialsHistory.index') }}" class="nav-link {{request()->route()->getName() === 'testimonialsHistory.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Testominals History</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item @if(request()->route()->getName() === 'tour.index' || request()->route()->getName() === 'tourHistory.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'tour.index' || request()->route()->getName() === 'tourHistory.index'?'active':''}}">
        <i class="nav-icon fas fa-bed"></i>
        <p>
            Tour
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('tour.index') }}" class="nav-link {{request()->route()->getName() === 'tour.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Tour</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('tourHistory.index') }}" class="nav-link {{request()->route()->getName() === 'tourHistory.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Tour History</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item @if(request()->route()->getName() === 'treatment.index' || request()->route()->getName() === 'treatmentDescription.index' || request()->route()->getName() === 'treatmentType.index' || request()->route()->getName() === 'treatmentTypeContent.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'treatment.index' || request()->route()->getName() === 'treatmentDescription.index'?'active':'' || request()->route()->getName() === 'treatmentType.index' || request()->route()->getName() === 'treatmentTypeContent.index'}}">
        <i class="nav-icon fas fa-cookie"></i>
        <p>
            Treatment
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('treatment.index') }}" class="nav-link {{request()->route()->getName() === 'treatment.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Treatment</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('treatmentDescription.index') }}" class="nav-link {{request()->route()->getName() === 'treatmentDescription.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Treatment Description</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('treatmentType.index') }}" class="nav-link {{request()->route()->getName() === 'treatmentType.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Treatment Type</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('treatmentTypeContent.index') }}" class="nav-link {{request()->route()->getName() === 'treatmentTypeContent.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Treatment Type Content</p>
            </a>
        </li>
    </ul>
</li>

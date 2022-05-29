<li class="nav-item">
    <a href="{{ route('admin.index') }}" class="nav-link {{request()->route()->getName() === 'admin.index'?'active':''}}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
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
    <a href="{{ route('partners.index') }}" class="nav-link {{request()->route()->getName() === 'partners.index'?'active':''}}">
        <i class="nav-icon fas fa-handshake"></i>
        <p>Partners</p>
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
<li class="nav-item @if(request()->route()->getName() === 'position.index' || request()->route()->getName() === 'career.index' || request()->route()->getName() === 'position.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'position.index' || request()->route()->getName() === 'career.index' || request()->route()->getName() === 'position.index'?'active':''}}">
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
            <a href="{{ route('career.index') }}" class="nav-link {{request()->route()->getName() === 'career.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Career</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('position.index') }}" class="nav-link {{request()->route()->getName() === 'position.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Team</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item @if(request()->route()->getName() === 'testominals.index' || request()->route()->getName() === 'testominalsHistory.index') menu-is-opening menu-open @endif">
    <a href="#" class="nav-link {{request()->route()->getName() === 'testominals.index' || request()->route()->getName() === 'testominalsHistory.index'?'active':''}}">
        <i class="nav-icon fas fa-eye"></i>
        <p>
            Testominals
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('testominals.index') }}" class="nav-link {{request()->route()->getName() === 'testominals.index'?'active':''}}">
                <i class="nav-icon far fa-circle"></i>
                <p>Testominals</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('testominalsHistory.index') }}" class="nav-link {{request()->route()->getName() === 'testominalsHistory.index'?'active':''}}">
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

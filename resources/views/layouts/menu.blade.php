<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('sucessStories*') ? 'active' : '' }}">
    <a href="{{ route('sucessStories.index') }}"><i class="fa fa-edit"></i><span>Sucess Stories</span></a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.index') }}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>

<li class="{{ Request::is('socials*') ? 'active' : '' }}">
    <a href="{{ route('socials.index') }}"><i class="fa fa-edit"></i><span>Socials</span></a>
</li>

<li class="{{ Request::is('subCategories*') ? 'active' : '' }}">
    <a href="{{ route('subCategories.index') }}"><i class="fa fa-edit"></i><span>Sub Categories</span></a>
</li>

<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{{ route('sliders.index') }}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>

<li class="{{ Request::is('blogs*') ? 'active' : '' }}">
    <a href="{{ route('blogs.index') }}"><i class="fa fa-edit"></i><span>Blogs</span></a>
</li>

<li class="{{ Request::is('shopItems*') ? 'active' : '' }}">
    <a href="{{ route('shopItems.index') }}"><i class="fa fa-edit"></i><span>Shop Items</span></a>
</li>

<li class="{{ Request::is('bankInformations*') ? 'active' : '' }}">
    <a href="{{ route('bankInformations.index') }}"><i class="fa fa-edit"></i><span>Bank Informations</span></a>
</li>


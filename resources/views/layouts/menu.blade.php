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

<li class="{{ Request::is('infoBankForms*') ? 'active' : '' }}">
    <a href="{{ route('infoBankForms.index') }}"><i class="fa fa-edit"></i><span>Information Bank Form</span></a>
</li>

<li class="{{ Request::is('competitions*') ? 'active' : '' }}">
    <a href="{{ route('competitions.index') }}"><i class="fa fa-edit"></i><span>Competitions</span></a>
</li>

<li class="{{ Request::is('competitionsForms*') ? 'active' : '' }}">
    <a href="{{ route('competitionsForms.index') }}"><i class="fa fa-edit"></i><span>Competitions Forms</span></a>
</li>

<li class="{{ Request::is('liveCertificates*') ? 'active' : '' }}">
    <a href="{{ route('liveCertificates.index') }}"><i class="fa fa-edit"></i><span>Live Certificates</span></a>
</li>

<li class="{{ Request::is('liveCertificateForms*') ? 'active' : '' }}">
    <a href="{{ route('liveCertificateForms.index') }}"><i class="fa fa-edit"></i><span>Live Certificate Forms</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{{ route('projects.index') }}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('projectsForms*') ? 'active' : '' }}">
    <a href="{{ route('projectsForms.index') }}"><i class="fa fa-edit"></i><span>Projects Forms</span></a>
</li>

<li class="{{ Request::is('aboutUses*') ? 'active' : '' }}">
    <a href="{{ route('aboutUses.index') }}"><i class="fa fa-edit"></i><span>About Us</span></a>
</li>


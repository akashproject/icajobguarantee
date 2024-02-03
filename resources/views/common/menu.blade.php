<div class="logo text-center">
    <a href="{{ url('/') }}">
        <img src="{{ url('assets/images/logo.png') }}" alt="logo" class="image-fit">
    </a>
</div>
<ul class="main-menu mt-4">
    <li class="menu-item">
        <a class="sidebar-link" href="{{ url('courses') }}"> <i class="fal fa-book"></i> Courses</a>
    </li>
    <!-- <li>
        <a href="{{ url('course-videos') }}">Videos</a>
    </li> -->
    <li  class="menu-item">
        <a class="sidebar-link" href="{{ url('start-test') }}"> <i class="fal fa-book"></i> Start New Test</a>
    </li>
    <li  class="menu-item">
        <a class="sidebar-link" href="{{ url('results') }}"><i class="fal fa-book"></i> Results</a>
    </li class="menu-item">
    <li  class="menu-item">
        <a class="sidebar-link" href="{{ url('faqs') }}"><i class="fal fa-book"></i> FAQs</a>
    </li>
</ul>
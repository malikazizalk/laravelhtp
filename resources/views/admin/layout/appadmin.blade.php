@include('admin.layout.top')
@include('admin.layout.menu')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                    @yield('content')
                    <!-- yield ini adalah pendeklarasian yg akan diisi dengan 
                         konten ketika yieldnya dipanggil didalam konten masing - masing
                         contoh yield yg diatas menggunakan value content -->
                        
                    </div>
                </main>
</div>


@include('admin.layout.bottom')
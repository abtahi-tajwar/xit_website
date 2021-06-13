        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    {{-- <p>2021 &copy; Mazer</p> --}}
                </div>
                <div class="float-end">
                    {{-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <ahref="http://ahmadsaugi.com">A. Saugi</a></p> --}}
                </div>
            </div>
        </footer>
    </div>
</div>
    <script src="{{ URL::asset('/lib/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="{{asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset('/vendor/sortable-js/jquery.sortable.js') }}"></script>
    <script src="{{ asset('/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js"></script>
    <script src="{{ asset('js/admin/sidebar.js') }}"></script>
    <script src="{{ asset('js/root-info.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>    
    
    
    @if($projects_submenu['create-projects'] === 'active' || $projects_submenu['edit-project'] === 'active')
    <script src="{{ asset('js/admin/create-project.js') }}"></script>
    @elseif($projects_submenu['all-projects'] === 'active')
    <script src="{{ asset('js/admin/all-projects.js') }}"></script>
    @elseif($members_submenu['all-members'] === 'active')
    <script src="{{ asset('js/admin/all-members.js') }}"></script> 
    @elseif($projects_submenu['slideshows'] === 'active')  
    <script src="{{ asset('js/admin/slideshows.js') }}"></script>  
    <script src="{{ asset('js/admin/search-list.js') }}"></script> 
    @elseif($projects_submenu['faqs'] === 'active')  
    <script src="{{ asset('js/admin/faq.js') }}"></script>  
    <script src="{{ asset('js/admin/search-list.js') }}"></script> 
    @endif

</body>
</html>
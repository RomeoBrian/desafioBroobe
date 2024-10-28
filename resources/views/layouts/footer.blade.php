
    <footer>
        <div class="container d-flex flex-wrap justify-content-between align-items-center py-2 my-4">

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex pe-2">
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-reddit"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $('#fetchData').on('click', function() {
            // Capturar los valores del formulario
            const url = $('#url').val();
            const category = $('input[name="category"]:checked').map(function() {return $(this).val();}).get();
            const strategy = $('#strategy').val();
            const key = 'AIzaSyDCrPAzhzWxZbJxPYIEURODTvBFVVRNHbY';

            console.log(category);


            // Enviar los datos vía AJAX con método POST
            $.ajax({
                url: '{{ route("google.data") }}',
                method: 'POST',
                data: {
                    url: url,
                    key: key,
                    category: category,
                    strategy: strategy,
                    _token: '{{ csrf_token() }}' // Token CSRF para seguridad
                },
                success: function(data) {
                    $('#result').html(JSON.stringify(data.lighthouseResult.categories));
                },
                error: function(error) {
                    console.error('Error:', error);
                    $('#result').html('Error: ' + error.statusText);
                }
            });
            console.log(data);
        });
    </script>
    {{-- <script src={{ asset('/js/getResponse.js') }}></script> --}}
    </body>
</html>

$('#fetchData').on('click', function() {
    // Capturar los valores del formulario
    const URL = $('#url').val();
    const CATEGORY = $('input[name="category[]"]:checked').map(function() {
        return $(this).val();
    }).get();
    const STRATEGY = $('#strategy').val();

    // Enviar los datos vía AJAX con método POST
    $.ajax({
        url: '{{ route("google.data") }}',
        method: 'POST',
        data: {
            URL: URL,
            CATEGORY: CATEGORY,
            STRATEGY: STRATEGY,
            _token: '{{ csrf_token() }}' // Token CSRF para seguridad
        },
        success: function(data) {
            console.log(data);
            $('#result').html(JSON.stringify(data));
        },
        error: function(error) {
            console.log(data);
            console.error('Error:', error);
            $('#result').html('Error: ' + error.statusText);
        }
    });
});
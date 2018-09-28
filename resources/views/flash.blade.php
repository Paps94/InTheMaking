@if (session()->has('flash_message'))

  <script>

      swal({
        type: "{{ session('flash_message.type') }}",
        title: "{{ session('flash_message.title') }}",
        text: "{{ session('flash_message.message') }}",
        showConfirmButton: false,
        timer: 4000
      });


  </script>

@endif


@if (session()->has('flash_message_overlay'))

  <script>

      swal({
        type: "{{ session('flash_message_overlay.type') }}",
        title: "{{ session('flash_message_overlay.title') }}",
        text: "{{ session('flash_message_overlay.message') }}",
        confirmButtonText: 'Pfffffffff',
      });


  </script>

@endif


@if (session()->has('flash_message_gif'))

  <script>

  swal({
    position: 'top-end',
    title: "<span style=\"font-size: 32px;\"> {{ session('flash_message_gif.title') }} </span>",
    confirmButtonText: 'FeelsBadMan',
    html: "<span style=\"font-size: 16px;\"> {{ session('flash_message_gif.message') }} </span>",
    imageUrl: '/images/gifs/FeelsBadMan.jpg',
    imageWidth: 600,
    imageHeight: 200,
    imageAlt: 'pepe the frog',
    backdrop:  `rgba(0,0,123,0.4)
                url("/images/gifs/b7a.gif")
                bottom left
                no-repeat
              `
  });


  </script>

@endif

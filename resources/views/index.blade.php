<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">

        <title>Miller App</title>
    </head>
    <body>
   
      
        <div class="lista">
            <form>
                @csrf
            </form>
       
        @foreach($temas as $tema) 
            <a href="#" class="row track" data-tema-id="{{$tema->id}}">
                <div class="col-sm-4">
                    <div class="imagen-trak"><img src="{{$tema->album->image}}" width="100%"></div>
                 </div>
                <div class="col-sm-8"> 
                    <div class="titulo-track">{{$tema->name}}</div>
                    <div class="artista-track">{{$tema->artist->name}}</div>
                </div>
              </a>
        @endforeach
            
          
        </div>
      

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript">
            
            $( document ).ready(function() {
                $('.track').on('click', function(e){

                    e.preventDefault();
                    var temaiken = $(this).data('tema-id');
                    var token = $("input[name='_token']").val();
                    var data={id:temaiken,_token:token};

                    $.ajax ({
                        type: "post",
                        url: "/add",
                        data: data,
                        success: function (msg) {
                            $("a[data-tema-id="+temaiken+"]").fadeOut();
                            console.log("Se ha realizado el POST con exito. "+ msg.success);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
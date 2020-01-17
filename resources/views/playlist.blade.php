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
  <body class="body-banda">
   
      
    <div class="container">
      <div class="row">

        <div class="col">
        
            @foreach($pl as $tema)
                @if($loop->last)
                    @php
                        $remain = ($loop->count -8)*(-1);
                    @endphp
                @endif
                @if($loop->iteration < 8)
                    <div class="track-p-banda">
                        <div class="numero-p-banda">{{$loop->iteration}}</div>
                        <div class="titulo-p-banda"><span>{{$tema->temas[0]->name}}</span><br />
                            <span>{{$tema->temas[0]->artist->name}}</span>
                        </div>
                    </div>
                @endif
            @endforeach
            
            @for ($i = 0; $i < $remain; $i++)
                <div class="track-p-banda">
                    <div class="numero-p-banda">{{$i}}</div>
                    <div class="titulo-p-banda"><span class="pendiente" >PENDIENTE</span>
                    </div>
                </div>
            @endfor
            
                
        </div>
        
        <div class="col-6"></div>
        
        <div class="col">
          
        <div class="track-p-banda">
            @foreach($pl as $tema)
                
                @if($loop->iteration >= 8)
                    <div class="track-p-banda">
                        <div class="numero-p-banda">{{$loop->iteration}}</div>
                        <div class="titulo-p-banda"><span>{{$tema->temas[0]->name}}</span><br />
                            <span>{{$tema->temas[0]->artist->name}}</span>
                        </div>
                    </div>
                @endif
                @if($loop->last)
                    @php
                            $remain = ($loop->count -8)*(-1);

                    @endphp                    
                @endif
            @endforeach
            
            @for ($i = 0; $i < $remain; $i++)
                <div class="track-p-banda">
                    <div class="numero-p-banda">{{$i}}</div>
                    <div class="titulo-p-banda"><span class="pendiente" >PENDIENTE</span>
                    </div>
                </div>
            @endfor
            
            
              
        </div>
      </div>
    </div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faked Person List</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- Load app jss --}}
    <script src="{{asset('js/app.js')}}"></script>
</head>

<body>
    <div id="app" class="container">
        <h1> Faked Person List</h1>
        <hr />

        <div class="row d-flex flex-row-reverse">
            <div class="col-4">
                <input type="text" name="search" id="search" placeholder="Search" autocomplete="false" />

            </div>
        </div>

        <div class="row mt-2">
            <ul id="personList">

                @include('person_list')
            </ul>

        </div>

    </div>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function(){
        var timeout = null;
        $("#search").on("keyup", function(){
            var searchData = $(this).val();
            clearTimeout(timeout);
            timeout = setTimeout(function(){
                $.ajax({
                url: "partial_person_list",
                method: "get",
                data: {"search": searchData},
                success: function(response){
                    $("#personList").html(response);
                },
                error: function(response){

                }
            });
            }, 500);

        });
    });
</script>

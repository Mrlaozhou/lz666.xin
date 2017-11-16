<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- script -->
        <script src="/js/app.js"></script>
        <script type="text/javascript">
            $(function()
            {
                search();
            })
            function search()
            {
                $.ajax({
                    url:"/api/testapi",
                    data:
                        {
                            tag_id:'',
                            edu_id:'',
                            cityid:'',
                            rank:'',
                            keywords:'东京',
                        },
                    dataType:'JSON',
                    type:'POST',
                    success:function(e)
                    {
                        console.log(e);
                    }
                })
            }

        </script>
    </head>
    <body>

    </body>
</html>

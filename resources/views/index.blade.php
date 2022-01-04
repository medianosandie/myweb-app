<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.navbar')
    <div class="wrap container pt-8">
        <div id="main" class="row">
            <div class="col-md-12">
                @include('pages.header')

            </div>
        </div>
    </div>
    @include('pages.experience')
    @include('includes.footer')
</body>

</html>
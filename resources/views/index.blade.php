<!doctype html>
<html>
  <head>
    @include('includes.head')
  </head>
  <body>
      @include('includes.navbar')
      <div class="wrap">
        <div id="main" class="row">
          <div class="col-md-12">
            @include('pages.header')
            @include('pages.experience')
            @include('pages.portofolio')
          </div>
        </div>
      </div>
      @include('includes.footer')
  </body>
</html>
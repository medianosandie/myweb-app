<section id="education" class="py-5 bg-dark text-white">
    <div class="container">
      <h2 class="font-weight-light">
        EDUCATION
      </h2>
      <hr class="mb-5" style="border-top: 1px solid #FFFFFF">
      @foreach ($educations as $education)
      <div class="row mb-5">
        <div class="col-lg-8">
          <h4 class="mb-0">{{ $education->title }}</h4>
        </div>
        <div class="col-lg-4 text-lg-right">
          {{ $education->year }}
        </div>
      </div>
      @endforeach
    </div>
  </section> 
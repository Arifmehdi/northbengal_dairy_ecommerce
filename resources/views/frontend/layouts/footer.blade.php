<footer id="footer" class="m-0" style="background-color: #002147; color: #ddd;">
  <div class="container">
    <div class="row pt-5 pb-4 gy-4">


      <!-- Embedded Map -->
      <div class="col-md-12 col-lg-6">
        <h4 class="text-white mb-3">{{ __('general.find')}}</h4>
        <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 0 10px rgba(255,255,255,0.15);">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.357245954015!2d90.43381139678957!3d23.805892300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7cc8115f191%3A0xff20d3dc15d8879e!2z4Kao4Kaw4KeN4KalIOCmrOCnh-CmmeCnjeCml-CmsiDgpqHgp4fgpofgprDgp4Ag4Kar4Ka-4Kaw4KeN4Kau!5e0!3m2!1sen!2sbd!4v1760133618506!5m2!1sen!2sbd" 
            width="100%" 
            height="200" 
            style="border:0;" 
            allowfullscreen 
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- Location -->
      <div class="col-md-6 col-lg-3">
        <h4 class="text-white mb-3">{{ __('general.location') }} </h4>
        <p class="mb-3 text-white">{{ $ws->contact_address }}</p>
        <a href="https://www.google.com/maps/place/Shasthoseba/@23.8058923,90.4338114,18z/data=!4m6!3m5!1s0x3755c7cc8115f191:0xff20d3dc15d8879e!8m2!3d23.8058923!4d90.4338114!16s%2Fg%2F11c5n7dq5j" 
          target="_blank" 
          class="btn btn-sm btn-outline-light">
          <i class="fas fa-map-marker-alt me-1"></i> {{ __('View Map') }}
        </a>

        <h4 class="text-white mb-3 mt-4">{{ __('general.follow') }}</h4>
        <ul class="list-inline mb-0">
          <li class="list-inline-item me-3">
            <a href="{{ $ws->fb_url }}" target="_blank" class="text-white fs-4">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="{{ $ws->youtube_url }}" target="_blank" class="text-white fs-4">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>

        <!-- Opening Hours -->
        <div class="col-md-6 col-lg-3">
          <h4 class="text-white mb-3">{{ __('Office Hour') }}</h4>
          <div class="text-light">
            <p class="mb-1 text-white">{{ __('general.everyday')}}</p>
            <p class="fw-bold text-white">{{__('Office Time')}}</p>
          </div>

          <!-- Emergency -->
          <div class="mt-4">
            <h4 class="text-white mb-2">{{ __('general.emergency')}}</h4>
            <a class="text-decoration-none text-white fs-5 fw-bold" href="tel:+8801748-095352">
              <i class="fas fa-phone-alt me-1"></i> +8801748-095352
            </a>
          </div>
        </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 mt-3" style="background-color: #001533;">
    <p class="m-0 text-light">
      © {{ date('Y') }} All Rights Reserved. Developed by 
      <a href="javascript:void(0)" style="color:#00bcd4; text-decoration:none;">Phenex Soft</a>
    </p>
  </div>
</footer>

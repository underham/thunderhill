

<div class="container">

  <div class="row">
    <div class="col-md-12 text-center center-block">
      <h1 id="portfolio"> My Portfolio</h1>
      <p class = "lead">Check out my recent projects.</p>
    </div>
  </div>


  <div class="row">
    
    <div class="col-md-4 fancybox-thumb">  
      <a class = "fancybox" data-fancybox-type = "iframe" href="http://www.andrewunderhill.org/mine/monarch"><img src="images/monarch-thumb2.png" alt="" ></a>
    </div>
  <!-- Add new projects here
    <div class="col-md-4 fancybox-thumb">
      <a class = "fancybox" data-fancybox-type = "iframe" href="http://www.andrewunderhill.org/monarch"><img src="images/monarch-thumb2.png" alt="" ></a>
    </div>
    
    <div class="col-md-4 fancybox-thumb">  
      <a class = "fancybox" data-fancybox-type = "iframe" href="http://www.andrewunderhill.org/monarch"><img src="images/monarch-thumb2.png" alt="" ></a>
  -->  
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('.fancybox').fancybox();
  });
</script>


  <script>
    


    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });





    });


  </script>





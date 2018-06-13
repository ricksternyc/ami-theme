      $(function(){
        $("#subtitle-category").text(category.split('-').join(' '));
        $(".category-intro-text").each(function(){
          if ($(this).data("category") == category)
          {
            $(this).show();
          }
        });

        $.ajax({
          url: "/data/collections",
          cache: false
        })
        .done(function( data ) {
          let cnt = 4;
          let row = null;

          for (const c of data)
          {
            if (cnt == 4)
            {
              if (row)
                $("#container_collection").append(row);

              row = $("<div class='range range-sm-center inset-xs-30'></div>");

              cnt = 0;
            }

            if (c.deeplink.indexOf(category) == 0)
            {
              let template = `<div class="cell-xs-6 cell-sm-4 cell-md-3">
                  <figure class="thumbnail thumbnail-variant-1">
                    <div class="img-container">
                      <a href="/collection/${c.deeplink}">
                        <img src="/images/collection/${c.image}" alt="" width="642" height="400"/>
                        <div class="thumbnail-mask"></div>
                      </a>
                    </div>
                    <h5 class="heading"><a href="/collection/${c.deeplink}">${c.title}</a></h5>
                  </figure>
                </div>`;
              
              row.append(template);
              cnt ++;
            }
          }
          $("#container_collection").append(row);
          
          $(".img-container").css("height", $(".img-container:first").innerWidth());
        })
        .fail(function( jqXHR, textStatus, errorThrown ) 
          {console.log(errorThrown);
        });
      });
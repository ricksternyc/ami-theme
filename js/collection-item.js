$("#container_meta .specifications").hide();
$("#container_meta .item-history").hide();

for (let key in item)
{
  let o = $("[data-field='" + key + "']");
  let v = item[key];
  let row = $("#container_additional");
  
  if (key == "image")
  {
    row.append(`<div><img class="thumb-image" alt="" src='/images/collection/${v}'/></div>`);
  }

  if (key == "specifications"){
    if (Object.keys(v).length> 0)
    {
      for (let metaKey in v)
      {
        let template = `<tr><td class="text-bold" width="40%">${metaKey}</td><td width="60%">${v[metaKey]}</td></tr>`
        $("#container_meta .specifications tbody").append(template);
      }
      $("#container_meta .specifications").show();
    }
  }

  if (key == "itemhistory"){
    if (Object.keys(v).length > 0)
    {
      for (let metaKey in v)
      {
        let template = `<tr><td class="text-bold" width="40%">${metaKey}</td><td width="60%">${v[metaKey]}</td></tr>`
        $("#container_meta .item-history tbody").append(template);
      }
      $("#container_meta .item-history").show();
    }
  }

  if (key == "additional"){
    for (let img of v)
      row.append(`<div><img class="thumb-image" alt="" src='/images/collection/${img}'/></div>`);
  }

  if (o.length > 0)
      o.html(v);
}

$("#container_additional").on("click","img.thumb-image", function(){
  let src = $(this).attr("src");
  $("#img_main").attr("src", src);

  $("img.thumb-image").parent().css("border", "none");
  $(this).parent().css("border", "2px solid #DDD");
});

$("#container_additional img:first").click();
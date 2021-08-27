<script type="text/javascript">// make case insensitive : https://css-tricks.com/snippets/jquery/make-jquery-contains-case-insensitive/
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
  return function( elem ) {
    return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
  };
});

var val;
$(document).ready(function() {
  $('#search').keyup(function() {
    var value = document.getElementById('search').value;
    val = $.trim(value).replace(/ +/g, ' ').toLowerCase();
    $(".parent:contains('" + val + "')").each(function( index, parent ) {
      jParent = $(parent)
      jParent.show();
      var childs = jParent.find('.child');
      var childsToHide = [];
      childs.each(function(index, child){
        var jChild = $(child);
        if(child.outerText.toLowerCase().indexOf(val) === -1){
          childsToHide.push(jChild);
        } else {
          jChild.show();
        }
      });
      if(childsToHide.length < childs.length){
        $.each(childsToHide, function(index, jChild){
          jChild.hide();
        })
      }
    });
    $(".parent:not(:contains('" + val + "'))").css("display", "none");
  });
});
</script>
 <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></link>
   <!-- <script src="js/jquery-3.5.1.js"></script> -->
   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<input type="text" id="search" placeholder="Type to search" class="clearable" />
<div class="graph">
  <span>graph</span>
  <div class="parent">
    <span>Personal Info1</span>
    <div>
      <fieldset>value1</fieldset>
      <div class="child">
        <span>Id </span>
        <span>111</span>
        </br>
        <span>name </span>
        <span>Jared</span>
        </br>

      </div>
      <div class="child">
        <span>Id</span>
        <span>222</span>
        </br>
        <span>name</span>
        <span>3rd name</span>
        </br>

        <span class="xtags">fathers name </span>
        <span class="xtags" contenteditable="true">Padelk</span>
      </div>
    </div>
  </div>

  <div name="connections" class="parent">
    <span class="xtags" type="connections">connections</span>
    <div>
      <div name="connection" class="child">
        <div class="child" type="connection"><span>con1</span>  
          <span contenteditable="true">STH</span>
          </br>
        </div>
      </div>
      <div name="connection" class="child"><span class="child">con2</span>
        <div class="child">

          <span contenteditable="true">STH2</span>
          </br>
        </div>
      </div>
    </div>
  </div>
</div>
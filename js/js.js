/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


  $(document).ready(function(){
      $('.slider').slider({full_width: true});
      // Start slider
    $('.slider').slider('start');
    });
    
      $(document).ready(function() {
    $('input[type=radio][name=group1]').change(function() {
        if (this.value == 'doc') {
            $("#doctor").show();
            $("#reg").show();
             $("#patient1").hide();
        }
        else if (this.value == 'pat') {
            $("#doctor").hide();
             $("#reg").show();
              $("#patient1").show();
        }
    });
});
    
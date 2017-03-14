
 // Execution de cette fonction lorsque le DOM sera entièrement chargé
 $(document).ready(function() {
   // Masquage des réponses
   $(".reponse").hide();
   // CSS : curseur pointeur
   $(".question").css("cursor", "pointer");
   // Clic sur la question
   $(".question").click(function() {
     // Actions uniquement si la réponse n'est pas déjà visible
     if($(this).next().is(":visible") == false) {
       // Masquage des réponses
       $(".reponse").slideUp();
       // Affichage de la réponse placée juste après dans le code HTML
       $(this).next().slideDown();
     }
   });
 });



 $('a[href^="#top"]').click(function(){
 var the_id = $(this).attr("href");

 $('html, body').animate({
   scrollTop:$(the_id).offset().top
 }, 'slow');
 return false;
 });

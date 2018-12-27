$('.btnDownload').on("click", function(){
  var idDownload = $(this).attr("idDownload");
  window.open("tools/tcpdf/pdf/"+idDownload,'_blank');
});

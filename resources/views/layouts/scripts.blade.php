
<script src="https://secure.adnxs.com/seg?add=10867867&t=1" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/custom-map.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC73fSbD52gYZNjXHf9togCYNCbC-aO7F4&callback=initMap"></script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Trigger Company",
  "url": "http://triggercompany.com",
  "logo": "https://triggercompany.com/img/trigger_company_logo.png",
  "contactPoint": [
    { "@type": "ContactPoint",
      "telephone": "+46-8-210420",
      "contactType": "sales"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/TheTriggerCompany/",
    "https://www.instagram.com/trigger.company/",
    "https://www.linkedin.com/company/trigger-company/"
  ]
}
</script>

<script>	
$("body").click(function(){
	$(".navbar-collapse").collapse('hide');
});

var hov = [];
$("#team, #phone, #transparens, #engagemang, #kvalitet, #kompetens, #better_you, #patriam, #kim_denzler").hover(
	function() {
		// console.log("hover: ");
		if(hov.indexOf(this.id) == -1){
			 gtag('event', this.id, {
				  'event_category': 'engagement',
				  'event_label': 'hover'
				});
			// console.log(this.id);
			hov.push(this.id);
		}

    
    
  }
);
</script>
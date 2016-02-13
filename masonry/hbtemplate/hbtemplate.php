<script id="hb-news-feet" type="text/x-handlebars-template">
    {{#each news-feet}}
    <div class="size22">
	    <article id="{{id}}" class="thumbnail">
		    <figure class="hover-effect">
		      <a href="{{link}}" alt="{{imageCaption}}">
		        <img src="images/{{imageName}}.jpg" alt="{{imageCaption}}" class="img-responsive">
		        <figcaption class="title">{{imageCaption}}</figcaption>
		      </a>
		    </figure>
		    <div class="caption-info">
		        <p class="text-title-type ellipsis-text">
		            <ins>{{type}}</ins>
		        </p>
		        <h4 class="new-title ">{{heading}}</h4>
		       <p class="text-info-news">{{shortinfo}}</p>
		       <p class="text-protext-primary">{{date}}</p>
		    </div> 
		</article>
	</div>
	{{/each}}
</script>

<script id="hb-news-feetff" type="text/x-handlebars-template">
   <p>{{id}}</p>
   <p>{{link}}</p>
   <p>{{imageName}}</p>
   <p>{{imageCaption}}</p>
   <p>{{type}}</p>
   <p>{{shortinfo}}</p>
   <p>{{heading}}</p>
   <p>{{date}}</p>
</script>
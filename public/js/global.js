$(function() {
    $('.tooltip-carousel').popover();
    $('#carousel-example-generic').on('slide.bs.carousel', function() {
      $('.tooltip-carousel').popover('hide');
      $(this).find('.caraousel-tooltip-item.active').fadeOut(function() {
        $(this).removeClass('active');
      });
    });

    $('#carousel-example-generic').on('slid.bs.carousel', function() {
      var index = $(this).find('.carousel-inner > .item.active').index();
      $(this).find('.caraousel-tooltip-item').eq(index).fadeIn(function() {
        $(this).addClass('active');
      });
    });

    $('.tooltip-carousel').mouseenter(function() {
      $(this).popover('show');
    }).mouseleave(function() {
      $(this).popover('hide');
    });
  });
 
const search = instantsearch({
  indexName: 'products',
  searchClient: algoliasearch('8GCQ3Z98J1', '15dbb9af71ac7fad17cab2181363db0a'),
});

search.addWidgets([
  instantsearch.widgets.searchBox({
    container: '#searchbox',
  }),
  instantsearch.widgets.clearRefinements({
    container: '#clear-refinements',
  }),
  instantsearch.widgets.refinementList({
      container: '#brand-list',
      attribute: 'title',
      operator: 'or',
      limit: 10,
      defaultRefinement: ['prueba'],
      templates: {
        header: 'Brands'
      }
  }),
  instantsearch.widgets.hits({
    container: '#hits',
    templates: {
      item: `
  <div class="card">
    <img class="card-img-top" style="height: 80px; width: 100%" src="img/{{imagen}}" align="left" alt="{{name}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> {{#helpers.highlight}}{ "attribute": "desciption" }{{/helpers.highlight}}</h5>
    </div>
  </div>
      `,
    },
  }),
  instantsearch.widgets.pagination({
    container: '#pagination',
  }),
]);


search.start();

$( ".eapps-link" ).hide();

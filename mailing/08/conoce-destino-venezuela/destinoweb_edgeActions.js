/***********************
* Acciones de composición de Adobe Edge Animate
*
* Editar este archivo con precaución, teniendo cuidado de conservar 
* las firmas de función y los comentarios que comienzan con "Edge" para mantener la 
* capacidad de interactuar con estas acciones en Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // los alias más comunes para las clases de Edge

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      Symbol.bindElementAction(compId, symbolName, "${facebook}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en la ventana actual
         // (sustituya "_self" por el atributo de destino correspondiente)
         window.open("https://www.facebook.com/Destino-Venezuela-248692658869370/","_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${ig}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://www.instagram.com/destino_ve/?hl=es", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${twiiter}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://twitter.com/destino_ve?lang=es", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${logo3}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("http://destinovenezuela.com.ve/", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${ANIMACION-DESTINOSD}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("http://destinovenezuela.com.ve/", "_blank");
         

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(window.jQuery || AdobeEdge.$, AdobeEdge, "EDGE-20300275");
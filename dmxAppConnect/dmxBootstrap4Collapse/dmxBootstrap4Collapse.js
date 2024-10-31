/*!
 DMXzone Bootstrap 4 Collapse
 Version: 2.0.0
 (c) 2024 Wappler.io
 @build 2024-04-15 17:48:46
 */
dmx.Component("bs4-collapse",{initialData:{collapsed:!0},attributes:{show:{type:Boolean,default:!1}},methods:{toggle(){jQuery(this.$node).collapse("toggle")},show(){jQuery(this.$node).collapse("show")},hide(){jQuery(this.$node).collapse("hide")}},events:{show:Event,shown:Event,hide:Event,hidden:Event},render(s){this.$parse(),jQuery(s).on("show.bs.collapse",this.dispatchEvent.bind(this,"show")),jQuery(s).on("shown.bs.collapse",this.dispatchEvent.bind(this,"shown")),jQuery(s).on("hide.bs.collapse",this.dispatchEvent.bind(this,"hide")),jQuery(s).on("hidden.bs.collapse",this.dispatchEvent.bind(this,"hidden")),jQuery(s).on("shown.bs.collapse",this._shownHandler.bind(this)),jQuery(s).on("hidden.bs.collapse",this._hiddenHandler.bind(this)),jQuery(s).addClass("collapse"),jQuery(s).toggleClass("show",this.props.show),jQuery(s).collapse({toggle:!1})},performUpdate(s){s.show!=this.props.show&&(jQuery(this.$node).toggleClass("show",this.props.show),this.set("collapsed",!this.props.show))},destroy(){jQuery(this.$node).off(".bs.collapse"),jQuery(this.$node).collapse("dispose")},_shownHandler(){this.set("collapsed",!1)},_hiddenHandler(){this.set("collapsed",!0)}});
//# sourceMappingURL=dmxBootstrap4Collapse.js.map

(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Members.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_gallery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-gallery */ "./node_modules/vue-gallery/dist/js/vue-gallery.js");
/* harmony import */ var vue_gallery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_gallery__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['users'],
  components: {
    'gallery': vue_gallery__WEBPACK_IMPORTED_MODULE_0___default.a
  },
  data: function data() {
    return {
      images: ['https://dummyimage.com/800/ffffff/000000', 'https://dummyimage.com/1600/ffffff/000000', 'https://dummyimage.com/1280/000000/ffffff', 'https://dummyimage.com/400/000000/ffffff'],
      index: null
    };
  },
  created: function created() {
    console.log(this.users.data[0].id);
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=style&index=0&lang=css&":
/*!*************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Members.vue?vue&type=style&index=0&lang=css& ***!
  \*************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.image {\r\n    float: left;\r\n    background-size: cover;\r\n    background-repeat: no-repeat;\r\n    background-position: center center;\r\n    border: 1px solid #ebebeb;\r\n    margin: 5px;\n}\r\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=style&index=0&lang=css&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Members.vue?vue&type=style&index=0&lang=css& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Members.vue?vue&type=style&index=0&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=style&index=0&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=template&id=2b07bdfe&":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Members.vue?vue&type=template&id=2b07bdfe& ***!
  \**********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "row mb-5 sm-mb-3" },
    _vm._l(_vm.users.data, function(user) {
      return _c("div", { key: user.id, staticClass: "col-md-3 sm-mb-3" }, [
        _c("div", { staticClass: "profile-item-hover-1" }, [
          _c(
            "a",
            {
              staticClass: "profile-item",
              attrs: {
                href: "#",
                "data-toggle": "modal",
                "data-target": "#modal" + user.id
              }
            },
            [
              _c("div", { staticClass: "profile-image clearfix" }, [
                _c("img", {
                  staticClass: "img-fluid",
                  attrs: { src: user.photo_url, alt: user.name }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "profile-details profile-text" }, [
                _c("h5", { staticClass: "title" }, [_vm._v(_vm._s(user.name))]),
                _vm._v(" "),
                _c("span", { staticClass: "text-black" }, [
                  _vm._v(_vm._s(user.age) + " Years Old")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "row" }, [
                  _c(
                    "button",
                    {
                      staticClass: "col-md-6 btn btn-outline-dark text-warning",
                      attrs: {
                        type: "button",
                        "data-toggle": "modal",
                        "data-target": "#modal" + user.id
                      },
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.selectUser(user)
                        }
                      }
                    },
                    [
                      _c(
                        "svg",
                        {
                          staticClass: "feather feather-message-circle",
                          attrs: {
                            xmlns: "http://www.w3.org/2000/svg",
                            width: "24",
                            height: "24",
                            viewBox: "0 0 24 24",
                            fill: "none",
                            stroke: "currentColor",
                            "stroke-width": "2",
                            "stroke-linecap": "round",
                            "stroke-linejoin": "round"
                          }
                        },
                        [
                          _c("path", {
                            attrs: {
                              d:
                                "M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                            }
                          })
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "button",
                    {
                      staticClass: "col-md-6 btn btn-outline-dark text-warning",
                      attrs: {
                        type: "button",
                        "data-toggle": "tooltip",
                        title: "",
                        "data-original-title": "Video call"
                      }
                    },
                    [
                      _c(
                        "svg",
                        {
                          staticClass: "feather feather-video",
                          attrs: {
                            xmlns: "http://www.w3.org/2000/svg",
                            width: "24",
                            height: "24",
                            viewBox: "0 0 24 24",
                            fill: "none",
                            stroke: "currentColor",
                            "stroke-width": "2",
                            "stroke-linecap": "round",
                            "stroke-linejoin": "round"
                          }
                        },
                        [
                          _c("polygon", {
                            attrs: { points: "23 7 16 12 23 17 23 7" }
                          }),
                          _c("rect", {
                            attrs: {
                              x: "1",
                              y: "5",
                              width: "15",
                              height: "14",
                              rx: "2",
                              ry: "2"
                            }
                          })
                        ]
                      )
                    ]
                  )
                ])
              ])
            ]
          )
        ]),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "modal fade",
            attrs: {
              id: "modal" + user.id,
              tabindex: "-1",
              role: "dialog",
              "aria-labelledby": "myModalLabel",
              "aria-hidden": "true"
            }
          },
          [
            _c(
              "div",
              {
                staticClass: "modal-dialog modal-lg",
                attrs: { role: "document" }
              },
              [
                _c("div", { staticClass: "modal-header" }, [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-md-12" }, [
                      _vm._v(
                        "\n                            " +
                          _vm._s(user.name) +
                          "\n                        "
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "modal-content" }, [
                  _c(
                    "div",
                    { staticClass: "modal-body" },
                    [
                      _c("div", { staticClass: "container-fluid" }, [
                        _c("div", { staticClass: "row" }, [
                          _c("div", {
                            staticClass: "image",
                            style: {
                              backgroundImage: "url(" + _vm.images[0] + ")",
                              width: "300px",
                              height: "200px"
                            },
                            on: {
                              click: function($event) {
                                _vm.index = _vm.images[0]
                              }
                            }
                          })
                        ])
                      ]),
                      _vm._v(" "),
                      _c("gallery", {
                        attrs: { images: _vm.images, index: _vm.index },
                        on: {
                          close: function($event) {
                            _vm.index = null
                          }
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("div", {
                    staticClass: "modal-footer justify-content-center"
                  })
                ])
              ]
            )
          ]
        )
      ])
    }),
    0
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/Members.vue":
/*!*********************************************!*\
  !*** ./resources/js/components/Members.vue ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Members_vue_vue_type_template_id_2b07bdfe___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Members.vue?vue&type=template&id=2b07bdfe& */ "./resources/js/components/Members.vue?vue&type=template&id=2b07bdfe&");
/* harmony import */ var _Members_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Members.vue?vue&type=script&lang=js& */ "./resources/js/components/Members.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _Members_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Members.vue?vue&type=style&index=0&lang=css& */ "./resources/js/components/Members.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Members_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Members_vue_vue_type_template_id_2b07bdfe___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Members_vue_vue_type_template_id_2b07bdfe___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Members.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/Members.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./resources/js/components/Members.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Members.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Members.vue?vue&type=style&index=0&lang=css&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/Members.vue?vue&type=style&index=0&lang=css& ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader!../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Members.vue?vue&type=style&index=0&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/Members.vue?vue&type=template&id=2b07bdfe&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/Members.vue?vue&type=template&id=2b07bdfe& ***!
  \****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_template_id_2b07bdfe___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Members.vue?vue&type=template&id=2b07bdfe& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Members.vue?vue&type=template&id=2b07bdfe&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_template_id_2b07bdfe___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Members_vue_vue_type_template_id_2b07bdfe___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);
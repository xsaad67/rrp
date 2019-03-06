/*
 * Author: Maciej Gierej
 * https://github.com/MakG10/jquery-memegenerator
 */
! function(e) {
    var t = {
            topTextPlaceholder: "TOP TEXT",
            bottomTextPlaceholder: "BOTTOM TEXT",
            addTextbox: "Add Textbox",
            advancedSettings: "Advanced Settings",
            toolbox: "Toolbox",
            optionCapitalLetters: "Use only capital letters",
            optionDragResize: "Enable dragging and resizing textboxes",
            optionDrawingAboveText: "Show drawing above text",
            drawingStart: "Draw",
            drawingStop: "Stop drawing",
            drawingErase: "Erase"
        },
        a = function(a, n) {
            var i = this;
            this.settings = e.extend(!0, {}, {
                defaultTextStyle: {
                    color: "#FFFFFF",
                    size: 42,
                    lineHeight: 1.2,
                    font: "Impact, Arial",
                    style: "normal",
                    forceUppercase: !0,
                    borderColor: "#000000",
                    borderWidth: 2
                },
                defaultDrawingStyle: {
                    color: "#FF0000",
                    lineWidth: 10
                },
                minFontSize: 1,
                maxFontSize: 128,
                minBorderWidth: 0,
                maxBorderWidth: 10,
                fontSizeStep: 1,
                borderWidthStep: 1,
                captions: [],
                previewMode: "canvas",
                outputFormat: "image/png",
                editingEnabled: !0,
                dragResizeEnabled: !0,
                drawingAboveText: !0,
                showAdvancedSettings: !0,
                colorPicker: null,
                wrapperClass: "mg-wrapper",
                toolboxSelector: null,
                layout: "vertical",
                useBootstrap: !1,
                useWordpressStyle: !1,
                onLayerChange: function(e) {
                    return !0
                },
                onNewTextBox: function(e) {
                    return !0
                },
                onInit: function() {
                    return !0
                }
            }, n), this.userSettings = {
                forceUppercase: i.settings.defaultTextStyle.forceUppercase,
                dragResizeEnabled: i.settings.dragResizeEnabled,
                drawingAboveText: i.settings.drawingAboveText
            }, this.element = a, this.wrapper = null, this.canvasContainer = null, this.helpersContainer = null, this.canvasLayers = [], this.originalSize = [], this.scale = 1, this.initialized = !1, this.save = function() {
                return i.canvas.save().toDataURL(i.settings.outputFormat)
            }, this.saveCanvas = function() {
                return i.canvas.save()
            }, this.download = function(t) {
                void 0 === t && (t = "image.png");
                var a = e("<a></a>").attr("href", this.save()).attr("download", t).appendTo(i.wrapper);
                a[0].click(), a.remove()
            }, this.serialize = function() {
                return JSON.stringify(i.getLayersData())
            }, this.deserialize = function(e) {
                var t = JSON.parse(e),
                    a = [];
                i.canvasLayers.forEach(function(e, t) {
                    var n = i.wrapper.find("[data-layer='" + e + "']");
                    if (i.getLayerType(n)) {
                        n.remove();
                        return void i.wrapper.find("[data-target-layer='" + e + "']").remove()
                    }
                    a.push(e)
                }), i.canvasLayers = a, t.reverse().forEach(function(e) {
                    "text" == e.type && i.ui.createTextBox("", null, e).prependTo(i.wrapper.find(".mg-controls"))
                }), i.events.onLayerChange()
            }, this.destroy = function() {
                this.element.insertAfter(this.wrapper), this.element.off("load.mg"), this.wrapper.remove()
            }, this.init = function() {
                a.wrap('<div class="mg-wrapper"><div class="mg-image"></div></div>'), i.wrapper = a.parent().parent(), i.canvasContainer = e('<div class="mg-canvas"></div>').appendTo(i.wrapper.find("> .mg-image")), i.helpersContainer = e('<div class="mg-helpers"></div>').appendTo(i.wrapper.find("> .mg-image")), "horizontal" == i.settings.layout && i.wrapper.addClass("mg-horizontal-layout"), "css" == i.settings.previewMode && i.cssPreview.enable(), e("<img>").attr("src", a.attr("src")).on("load", function() {
                    i.originalSize[0] = this.width, i.originalSize[1] = this.height, i.scale = a.width() / i.originalSize[0], i.settings.editingEnabled && i.wrapper.append(i.ui.createControls()), i.settings.captions.forEach(function(e, t) {
                        var a = i.wrapper.find(".mg-textbox-text").eq(t);
                        0 == a.length && (a = i.ui.createTextBox("", "center center").insertAfter(i.wrapper.find(".mg-controls .mg-textbox").last()).find(".mg-textbox-text")), i.userSettings.forceUppercase && (e = i.ui._strtoupper(e)), a.attr("value", e), a.attr("data-text", e), a.trigger("change")
                    }), i.settings.useBootstrap ? i.ui.bootstrapify() : i.settings.useWordpressStyle && i.ui.wordpressify(), i.initialized = !0, i.settings.onInit.call(i)
                }), e(window).on("resize", function() {
                    i.scale = a.width() / i.originalSize[0], i.events.onLayerChange()
                }), a.on("load.mg", function() {
                    i.initialized && (i.originalSize[0] = this.naturalWidth, i.originalSize[1] = this.naturalHeight, i.scale = a.width() / i.originalSize[0], i.ui.resizeHelpers(), i.events.onLayerChange())
                })
            }, this.ui = {
                createControls: function() {
                    var a = e('<div class="mg-controls"></div>');
                    a.append("<div class='row'><div class='ajMeme-holder'>Loading Templates....</div></div>");
                    a.append(i.ui.createTextBox(t.topTextPlaceholder, "top center")), a.append(i.ui.createTextBox(t.bottomTextPlaceholder, "bottom center"));
                    var n = e('<a href="#" class="mg-add-textbox">' + t.addTextbox + "</a>").appendTo(a);
                    a.append("<div class='row'><button class='btn btn-primary col-12' id='saveMeme'>Generate Meme</button></div>");

                    if (e(n).click(function(e) {
                            e.preventDefault();
                            var t = i.ui.createTextBox("", "center center").insertAfter(a.find(".mg-textbox").last());
                            i.settings.useBootstrap ? i.ui.bootstrapify() : i.settings.useWordpressStyle && i.ui.wordpressify(), t.find("input[type=text]").first().focus(), i.settings.onNewTextBox.call(i, t)
                        }), i.settings.showAdvancedSettings) {
                        var r = e('<a href="#" class="mg-advanced-settings-toggle">' + t.advancedSettings + "</a>").appendTo(a),
                            s = e('<div class="mg-advanced-settings"></div>').appendTo(a).hide();
                        s.append(e('<div class="option"></div>').append(e('<input type="checkbox" class="mg-option-uppercase">')).append(e("<label>" + t.optionCapitalLetters + "</label>"))), a.find(".mg-option-uppercase").prop("checked", i.userSettings.forceUppercase), a.find(".mg-option-uppercase").change(function(t) {
                            t.preventDefault(), i.userSettings.forceUppercase = e(this).is(":checked"), i.userSettings.forceUppercase ? (a.find(".mg-textbox-text").css("textTransform", "uppercase"), a.find(".mg-textbox-text").each(function() {
                                e(this).val(i.ui._strtoupper(e(this).val()))
                            }), i.events.onLayerChange()) : a.find(".mg-textbox-text").css("textTransform", "none")
                        }), s.append(e('<div class="option"></div>').append(e('<input type="checkbox" class="mg-option-dragresize">')).append(e("<label>" + t.optionDragResize + "</label>"))), a.find(".mg-option-dragresize").prop("checked", i.userSettings.dragResizeEnabled), a.find(".mg-option-dragresize").change(function(t) {
                            t.preventDefault(), i.userSettings.dragResizeEnabled = e(this).is(":checked"), i.ui.destroyPositionHelpers(), i.userSettings.dragResizeEnabled && a.find(".mg-textbox").each(function() {
                                i.ui.createPositionHelper(e(this))
                            })
                        }), s.append(e('<div class="option"></div>').append(e('<input type="checkbox" class="mg-option-drawing-above-text">')).append(e("<label>" + t.optionDrawingAboveText + "</label>"))), a.find(".mg-option-drawing-above-text").prop("checked", i.userSettings.dragResizeEnabled), a.find(".mg-option-drawing-above-text").change(function(t) {
                            t.preventDefault(), i.userSettings.drawingAboveText = e(this).is(":checked"), i.userSettings.drawingAboveText ? (i.wrapper.find(".mg-canvas canvas, .mg-css-preview").css("zIndex", 3), i.wrapper.find(".mg-canvas, .mg-canvas .mg-drawing-layer").css("zIndex", 4)) : (i.wrapper.find(".mg-canvas canvas, .mg-css-preview").css("zIndex", 4), i.wrapper.find(".mg-canvas, .mg-canvas .mg-drawing-layer").css("zIndex", 3))
                        }), e(r).click(function(e) {
                            e.preventDefault(), s.slideToggle(200), r.toggleClass("active")
                        })
                    }
                    var o;
                    if (null == i.settings.toolboxSelector) {
                        var d = e('<a href="#" class="mg-toolbox-toggle">' + t.toolbox + "</a>").appendTo(a),
                            o = e('<div class="mg-toolbox"></div>').appendTo(a).hide();
                        e(d).click(function(e) {
                            e.preventDefault(), o.slideToggle(200), d.toggleClass("active")
                        })
                    } else o = i.settings.toolboxSelector instanceof jQuery ? i.settings.toolboxSelector : e(i.settings.toolboxSelector);
                    return o.append('<div class="mg-toolbox-item"><button class="mg-drawing-toggle">' + t.drawingStart + "</button></div>"), o.append('<div class="mg-toolbox-item"><input type="text" class="colorpicker" value="' + i.settings.defaultDrawingStyle.color + '"></div>'), o.append('<div class="mg-toolbox-item"><input type="number" class="mg-drawing-line-width" value="' + i.settings.defaultDrawingStyle.lineWidth + '"></div>'), o.append('<div class="mg-toolbox-item"><button class="mg-drawing-erase">' + t.drawingErase + "</button></div>"), o.find(".mg-drawing-toggle").click(function() {
                        e(this).toggleClass("active"), e(this).hasClass("active") ? (e(this).html(t.drawingStop), i.drawing.enable()) : (e(this).html(t.drawingStart), i.drawing.disable())
                    }), o.find(".mg-drawing-line-width").on("change keyup", function() {
                        i.drawing.lineWidth = parseInt(e(this).val(), 10)
                    }), o.find(".mg-drawing-erase").click(function() {
                        i.drawing.erase()
                    }), o.find(".colorpicker").change(function() {
                        i.drawing.color = e(this).attr("value")
                    }), i.ui._bindColorpicker(o.find(".colorpicker")), a
                },
                createTextBox: function(t, a, n) {
                    void 0 === n && (n = {}), n = e.extend({
                        layerName: "layer" + (i.canvasLayers.length + 1),
                        text: "",
                        x: 0,
                        y: 0,
                        maxWidth: i.originalSize[0],
                        fontSize: i.settings.defaultTextStyle.size,
                        color: i.settings.defaultTextStyle.color,
                        borderColor: i.settings.defaultTextStyle.borderColor,
                        borderWidth: i.settings.defaultTextStyle.borderWidth
                    }, n), n.height = Math.round(i.settings.defaultTextStyle.lineHeight * n.fontSize);
                    var r = n.layerName,
                        s = n.maxWidth,
                        o = n.height,
                        d = null === a ? [n.x, n.y] : i.ui._getBoxCoordinates(a, n.maxWidth, n.height),
                        l = e('<div class="mg-textbox" data-layer="' + r + '" data-x="' + d[0] + '" data-y="' + d[1] + '" data-width="' + s + '" data-height="' + o + '"></div>');
                    return l.append(e('<input type="text" class="mg-textbox-text" placeholder="' + t + '" data-text="' + n.text + '" value="' + n.text + '">')), l.append(e('<input type="number" class="mg-textbox-size" value="' + n.fontSize + '" step="' + i.settings.fontSizeStep + '" min="' + i.settings.minFontSize + '" max="' + i.settings.maxFontSize + '">')), i.userSettings.forceUppercase && l.find(".mg-textbox-text").css("textTransform", "uppercase"), 0 != i.settings.colorPicker && (l.append('<input type="text" class="mg-textbox-text-color colorpicker" value="' + n.color + '">'), l.append('<input type="text" class="mg-textbox-border-color colorpicker" value="' + n.borderColor + '">'), l.find(".colorpicker").wrap('<div class="colorpickerContainer"></div>'), i.ui._bindColorpicker(l.find(".colorpicker"))), l.append(e('<input type="number" class="mg-textbox-border-width" value="' + n.borderWidth + '" step="' + i.settings.borderWidthStep + '" min="' + i.settings.minBorderWidth + '" max="' + i.settings.maxBorderWidth + '">')), i.canvasLayers.push(r), l.find(".mg-textbox-text, .mg-textbox-size, .mg-textbox-border-width").on("change keyup", function() {
                        var t = e(this).val();
                        i.userSettings.forceUppercase && (t = i.ui._strtoupper(t)), e(this).attr("data-text", t), i.events.onLayerChange(r)
                    }), i.userSettings.dragResizeEnabled && i.ui.createPositionHelper(l), l
                },
                createPositionHelper: function(t) {
                    var a = t.data("layer"),
                        n = e('<div id="' + a + '" class="draggable resizable" data-target-layer="' + a + '"></div>').appendTo(i.helpersContainer);
                    n.css({
                        left: t.attr("data-x") * i.scale,
                        top: t.attr("data-y") * i.scale,
                        width: t.attr("data-width") * i.scale,
                        height: t.attr("data-height") * i.scale
                    }), n.draggable({
                        containment: i.wrapper.find("> .mg-image > img"),
                        drag: function(e, t) {
                            var n = i.wrapper.find("[data-layer='" + a + "']");
                            n.attr("data-x", t.position.left * (1 / i.scale)), n.attr("data-y", t.position.top * (1 / i.scale)), i.events.onLayerChange()
                        }
                    }), n.resizable({
                        containment: i.wrapper.find("> .mg-image > img"),
                        resize: function(e, t) {
                            var n = i.wrapper.find("[data-layer='" + a + "']");
                            n.attr("data-width", t.size.width * (1 / i.scale)), n.attr("data-height", t.size.height * (1 / i.scale)), i.events.onLayerChange()
                        }
                    }).rotatable({
                        rotate: function(event, ui) {
                            var n = i.wrapper.find("[data-layer='" + a + "']");
                        },          
                    })
                },
                resizeHelpers: function() {
                    i.helpersContainer.find("> div").each(function() {
                        var t, a, n, r = i.wrapper.find("[data-layer='" + e(this).attr("data-target-layer") + "']"),
                            s = null;
                        if (r.attr("data-width") && (t = parseInt(r.attr("data-width"), 10) * i.scale, t > i.helpersContainer.width() && (t = i.helpersContainer.width()), e(this).css("width", t), r.attr("data-width", parseInt(t * (1 / i.scale), 10))), r.attr("data-height") && (a = parseInt(r.attr("data-height"), 10) * i.scale, e(this).css("height", a), e(this).resizable("option", "minHeight", a), e(this).resizable("option", "maxHeight", a)), r.attr("data-x") && r.attr("data-y") && (n = r.attr("data-x") * i.scale, n + t > i.helpersContainer.width() && (n = i.helpersContainer.width() - t), n < 0 && (n = 0), s = r.attr("data-y") * i.scale, s + a > i.helpersContainer.height() && (s = i.helpersContainer.height() - a), s < 0 && (s = 0), e(this).css({
                                left: n,
                                top: s
                            }), r.attr("data-x", parseInt(n * (1 / i.scale), 10)), r.attr("data-y", parseInt(s * (1 / i.scale), 10))), parseInt(e(this).css("top"), 10) + e(this).outerHeight() > i.helpersContainer.height()) {
                            var o = i.helpersContainer.outerHeight() - e(this).outerHeight();
                            e(this).css("top", o), r.attr("data-y", o * (1 / i.scale))
                        }
                    })
                },
                destroyPositionHelpers: function() {
                    i.helpersContainer.find("> div").remove()
                },
                bootstrapify: function() {
                    var t = i.wrapper.find(".mg-controls");
                     i.wrapper.hasClass("usingBootstrap") || t.wrapInner('<div class="container-fluid"></div>'), 
                    i.wrapper.addClass("usingBootstrap"), t.find(".mg-textbox").each(function() {
                        e(this).hasClass("row") || (e(this).addClass("row"), e(this).find(".mg-textbox-text").addClass("form-control").wrap(e("<div></div>").addClass("col-lg-12 col-12 mt-2")),
                        e(this).find(".mg-textbox-size").addClass("form-control").wrap(e("<div></div>").addClass("col-lg-3 col-6 mt-2")), 
                        e(this).find(".mg-textbox-border-width").addClass("form-control").wrap(e("<div></div>").addClass("col-lg-3 col-6 mt-2")), 
                        e(this).find(".colorpicker").addClass("form-control"), e(this).find(".colorpickerContainer").addClass("col-lg-3 col-6 mt-2"), 
                        e(this).find(".colorpickerReplacer").addClass("btn btn-default"))
                    }),     
                    t.find(".mg-add-textbox").hasClass("btn") || t.find(".mg-add-textbox").addClass("btn btn-primary btn-block").wrap(e("<div></div>").addClass("row")),
                    t.find(".mg-advanced-settings-toggle").hasClass("btn") || (t.find(".mg-advanced-settings-toggle, .mg-toolbox-toggle").addClass("btn btn-primary btn-block").wrap(e("<div></div>").addClass("row")), 
                    t.find(".mg-advanced-settings, .mg-toolbox").addClass("row"), t.find(".mg-advanced-settings .option input").wrap('<div class="col-1"></div>'), t.find(".mg-advanced-settings .option label").wrap('<div class="col-11"></div>')), t.find(".mg-drawing-toggle").hasClass("btn") || (t.find(".mg-drawing-toggle, .mg-drawing-erase").addClass("btn btn-default btn-block"), t.find(".mg-toolbox-item").addClass("col-3"))
        
                    // t.find('.container-fluid').prepend("<div class='row'><div class='ajMeme-holder'>Loading Templates....</div></div>");
                   
                },
                wordpressify: function() {
                    var e = i.wrapper.find(".mg-controls");
                    i.wrapper.addClass("usingWordpress"), e.find(".mg-add-textbox").hasClass("button") || e.find(".mg-add-textbox").addClass("button button-secondary"), e.find(".mg-advanced-settings-toggle").hasClass("button") || e.find(".mg-advanced-settings-toggle, .mg-toolbox-toggle").addClass("button button-primary"), e.find(".mg-drawing-toggle").hasClass("button") || e.find(".mg-drawing-toggle, .mg-drawing-erase").addClass("button button-secondary")
                },
                _bindColorpicker: function(t) {
                    if (null == i.settings.colorPicker && e.isFunction(e.fn.spectrum)) {
                        var a = function(t) {
                            e(this).val(t.toHexString()), e(this).attr("value", t.toHexString()), e(this).trigger("change"), i.events.onLayerChange(e(this).parent().data("layer"))
                        };
                        t.spectrum({
                            replacerClassName: "colorpickerReplacer",
                            change: a,
                            move: a
                        })
                    } else null == i.settings.colorPicker ? t.on("change keyup", function() {
                        e(this).attr("value", e(this).val()), i.events.onLayerChange(e(this).parent().data("layer"))
                    }) : i.settings.colorPicker.call(this, i, t)
                },
                _getBoxCoordinates: function(e, t, a) {
                    var n = e.split(" "),
                        r = [];
                    if (2 == n.length) {
                        switch (n[0]) {
                            case "center":
                                r[1] = parseInt(i.originalSize[1] / 2, 10);
                                break;
                            case "bottom":
                                r[1] = i.originalSize[1] - a;
                                break;
                            case "top":
                            default:
                                r[1] = 0
                        }
                        switch (n[1]) {
                            case "center":
                                r[0] = parseInt(i.originalSize[0] / 2, 10) - parseInt(t / 2, 10);
                                break;
                            case "right":
                                r[0] = i.originalSize[0] - t;
                                break;
                            case "left":
                            default:
                                r[0] = 0
                        }
                    } else r[0] = r[1] = 0;
                    return r
                },
                _normalizePosition: function(e) {
                    return e * (2 - i.scale)
                },
                _strtoupper: function(e) {
                    return e.toUpperCase()
                }
            }, this.getLayersData = function() {
                var e = [];
                return i.canvasLayers.forEach(function(t) {
                    var a = i.wrapper.find("[data-layer='" + t + "']"),
                        n = i.getLayerType(a);
                    switch (n) {
                        case "text":
                            return void e.push({
                                type: n,
                                name: t,
                                text: a.find(".mg-textbox-text").attr("data-text"),
                                x: a.attr("data-x"),
                                y: a.attr("data-y"),
                                maxWidth: a.attr("data-width"),
                                fontSize: a.find(".mg-textbox-size").val(),
                                lineHeight: i.settings.defaultTextStyle.lineHeight,
                                font: i.settings.defaultTextStyle.font,
                                style: i.settings.defaultTextStyle.style,
                                color: a.find(".mg-textbox-text-color").val(),
                                borderColor: a.find(".mg-textbox-border-color").attr("value"),
                                borderWidth: a.find(".mg-textbox-border-width").val()
                            });
                        case "drawing":
                            return void e.push({
                                type: n
                            });
                        default:
                            return
                    }
                }), e
            }, this.getLayerType = function(e) {
                return e.hasClass("mg-textbox") ? "text" : e.hasClass("mg-drawing-layer") ? "drawing" : null
            }, this.canvas = {
                drawLayers: function(e) {
                    void 0 === e && (e = i.scale), i.canvasContainer.find("canvas:not(.mg-drawing-layer)").remove(""), i.getLayersData().forEach(function(t) {
                        if (layerElement = i.wrapper.find("[data-layer='" + t.name + "']"), "text" == t.type) {
                            var a = i.canvas.drawText(t.text, t.x * e, t.y * e, t.maxWidth * e, t.fontSize * e, t.lineHeight, t.font, t.style, t.color, t.borderColor, t.borderWidth * e, e);
                            i.canvasContainer.append(a);
                            var n = a.attr("data-text-lines") * t.fontSize;
                            layerElement.attr("data-height", Math.round(i.settings.defaultTextStyle.lineHeight * n))
                        }
                    }), i.userSettings.drawingAboveText ? i.canvasContainer.find("canvas.mg-drawing-layer").remove().insertAfter(i.canvasContainer.find(":last")) : i.canvasContainer.find("canvas.mg-drawing-layer").remove().insertBefore(i.canvasContainer.find(":first"))
                },
                drawText: function(t, a, n, r, s, o, d, l, c, g, p, h) {
                    void 0 === h && (h = 1);
                    var f = e("<canvas></canvas>").attr("width", i.originalSize[0] * h).attr("height", i.originalSize[1] * h),
                        u = f[0].getContext("2d");
                    u.font = l + " " + s + "px " + d, u.textAlign = "center", u.fillStyle = c, u.strokeStyle = g, u.lineWidth = p;
                    var v = parseInt(a, 10) + parseInt(r, 10) / 2,
                        w = parseInt(n, 10) + parseInt(s, 10),
                        o = s * parseFloat(o),
                        m = i.canvas._wrapText(u, t, r);
                    return m.forEach(function(e, t) {
                        u.fillText(e, v, w - p + (o - s) / 2 + t * o), p > 0 && u.strokeText(e, v, w - p + (o - s) / 2 + t * o)
                    }), f.attr("data-text-lines", m.length), f
                },
                save: function() {
                    var t = e("<canvas></canvas>").attr("width", i.originalSize[0]).attr("height", i.originalSize[1])[0],
                        n = t.getContext("2d");
                    return n.drawImage(a[0], 0, 0), i.canvas.drawLayers(1), i.canvasContainer.find("canvas").each(function() {
                        n.drawImage(this, 0, 0, i.originalSize[0], i.originalSize[1])
                    }), "canvas" == i.settings.previewMode ? i.canvas.drawLayers() : i.canvas.clear(), t
                },
                clear: function() {
                    i.canvasContainer.find("canvas:not(.mg-drawing-layer)").remove("")
                },
                _wrapText: function(e, t, a) {
                    for (var n = t.split(" "), i = [], r = n[0], s = 1; s < n.length; s++) {
                        var o = n[s];
                        e.measureText(r + " " + o).width < a ? r += " " + o : (i.push(r), r = o)
                    }
                    return i.push(r), i
                }
            }, this.cssPreview = {
                enable: function() {
                    i.wrapper.find("> .mg-image").append('<div class="mg-css-preview"></div>')
                },
                disable: function() {
                    i.wrapper.find("div.mg-css-preview").remove()
                },
                drawLayers: function() {
                    var e = i.wrapper.find(".mg-css-preview");
                    e.find("div").remove(), i.getLayersData().forEach(function(t) {
                        if (layerElement = i.wrapper.find("[data-layer='" + t.name + "']"), "text" == t.type) {
                            var a = i.cssPreview.drawText(t.text, t.x * i.scale, t.y * i.scale, t.maxWidth * i.scale, t.fontSize * i.scale, t.lineHeight * i.scale, t.font, t.style, t.color, t.borderColor, t.borderWidth * i.scale);
                            e.append(a), layerElement.attr("data-height", Math.round(a.height()))
                        }
                    })
                },
                drawText: function(t, a, n, i, r, s, o, d, l, c, g) {
                    var p = e("<div></div>").html(t);
                    return p.css({
                        left: a,
                        top: n,
                        width: i,
                        minHeight: r,
                        fontSize: r,
                        fontFamily: o,
                        fontWeight: -1 == d.indexOf("bold") ? "normal" : "bold",
                        fontStyle: -1 == d.indexOf("italic") ? "normal" : "italic",
                        color: l,
                        textAlign: "center",
                        lineHeight: parseFloat(s),
                        textShadow: function(e, t) {
                            var a = "";
                            return [
                                [-1, -1],
                                [-1, 1],
                                [1, -1],
                                [1, 1]
                            ].forEach(function(n, i) {
                                a += n[0] * e + "px " + n[1] * e + "px 0 " + t, 3 != i && (a += ",")
                            }), a
                        }(g, c)
                    }), p
                }
            }, this.drawing = {
                container: null,
                canvas: null,
                enabled: !1,
                flag: !1,
                prevX: 0,
                currX: 0,
                prevY: 0,
                currY: 0,
                color: i.settings.defaultDrawingStyle.color,
                lineWidth: i.settings.defaultDrawingStyle.lineWidth,
                enable: function() {
                    if (null == i.drawing.canvas) {
                        i.drawing.container = e('<div class="mg-drawing"></div>').appendTo(i.wrapper.find("> .mg-image"));
                        var t = e('<canvas class="mg-drawing-layer"></canvas>').attr("width", i.drawing.container.width()).attr("height", i.drawing.container.height()).appendTo(i.canvasContainer);
                        i.drawing.canvas = t[0], i.drawing.initEvents()
                    }
                    i.drawing.enabled = !0, i.drawing.container.show()
                },
                disable: function() {
                    i.drawing.enabled = !1, i.drawing.container.hide()
                },
                initEvents: function() {
                    i.drawing.container[0].addEventListener("mousemove", function(e) {
                        i.drawing.handleAction("move", e)
                    }, !1), i.drawing.container[0].addEventListener("mousedown", function(e) {
                        i.drawing.handleAction("down", e)
                    }, !1), i.drawing.container[0].addEventListener("mouseup", function(e) {
                        i.drawing.handleAction("up", e)
                    }, !1), i.drawing.container[0].addEventListener("mouseout", function(e) {
                        i.drawing.handleAction("out", e)
                    }, !1)
                },
                draw: function() {
                    var e = i.drawing.canvas.getContext("2d");
                    e.beginPath(), e.moveTo(i.drawing.prevX, i.drawing.prevY), e.lineTo(i.drawing.currX, i.drawing.currY), e.strokeStyle = i.drawing.color, e.lineWidth = i.drawing.lineWidth, e.stroke(), e.closePath()
                },
                erase: function() {
                    i.drawing.canvas.getContext("2d").clearRect(0, 0, i.drawing.canvas.width, i.drawing.canvas.height)
                },
                handleAction: function(e, t) {
                    if (i.drawing.enabled) {
                        var a = i.drawing.canvas.getContext("2d");
                        "down" == e ? (i.drawing.prevX = i.drawing.currX, i.drawing.prevY = i.drawing.currY, i.drawing.currX = t.clientX - i.drawing.container.offset().left, i.drawing.currY = t.clientY - i.drawing.container.offset().top, i.drawing.flag = !0, a.beginPath(), a.fillStyle = i.drawing.color, a.fillRect(i.drawing.currX, i.drawing.currY, 2, 2), a.closePath()) : "up" == e || "out" == e ? i.drawing.flag = !1 : "move" == e && i.drawing.flag && (i.drawing.prevX = i.drawing.currX, i.drawing.prevY = i.drawing.currY, i.drawing.currX = t.clientX - i.drawing.container.offset().left, i.drawing.currY = t.clientY - i.drawing.container.offset().top, i.drawing.draw())
                    }
                }
            }, this.events = {
                onLayerChange: function(e) {
                    "canvas" == i.settings.previewMode ? i.canvas.drawLayers() : "css" == i.settings.previewMode && i.cssPreview.drawLayers(), i.ui.resizeHelpers(), i.settings.onLayerChange.call(i, e)
                }
            }
        };
    e.fn.memeGenerator = function(n) {
        var i = "string" == typeof n ? n : void 0;
        if (i) {
            var r = [],
                s = arguments.length > 1 ? Array.prototype.slice.call(arguments, 1) : void 0,
                o = [];
            return "i18n" == i ? void e.extend(t, s[1]) : (this.each(function() {
                var t = e(this),
                    a = t.data("memeGenerator");
                r.push(a)
            }), this.each(function(e) {
                var t = r[e];
                if (!t) return void o.push(void 0);
                if ("function" == typeof t[i]) {
                    var a = t[i].apply(t, s);
                    o.push(a)
                } else console.warn('$.fn.memeGenerator: Undefined method "' + i + '"')
            }), o.length > 1 ? o : o[0])
        }
        var d = "object" == typeof n ? n : void 0;
        return this.each(function() {
            var t = e(this),
                n = new a(t, d);
            n.init(), t.data("memeGenerator", n)
        })
    }
}(jQuery);
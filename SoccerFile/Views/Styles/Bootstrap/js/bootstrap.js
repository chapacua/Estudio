/*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under the MIT license
 */

if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher')
  }
}(jQuery);

/* ========================================================================
 * Bootstrap: transition.js v3.3.5
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      WebkitTransition : 'webkitTransitionEnd',
      MozTransition    : 'transitionend',
      OTransition      : 'oTransitionEnd otransitionend',
      transition       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }

    return false // explicit for ie8 (  ._.)
  }

  // http://blog.alexmaccaw.com/css-transitions
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false
    var $el = this
    $(this).one('bsTransitionEnd', function () { called = true })
    var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  $(function () {
    $.support.transition = transitionEnd()

    if (!$.support.transition) return

    $.event.special.bsTransitionEnd = {
      bindType: $.support.transition.end,
      delegateType: $.support.transition.end,
      handle: function (e) {
        if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
      }
    }
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: alert.js v3.3.5
 * http://getbootstrap.com/javascript/#alerts
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss="alert"]'
  var Alert   = function (el) {
    $(el).on('click', dismiss, this.close)
  }

  Alert.VERSION = '3.3.5'

  Alert.TRANSITION_DURATION = 150

  Alert.prototype.close = function (e) {
    var $this    = $(this)
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = $(selector)

    if (e) e.preventDefault()

    if (!$parent.length) {
      $parent = $this.closest('.alert')
    }

    $parent.trigger(e = $.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    $parent.removeClass('in')

    function removeElement() {
      // detach from parent, fire event then clean up data
      $parent.detach().trigger('closed.bs.alert').remove()
    }

    $.support.transition && $parent.hasClass('fade') ?
      $parent
        .one('bsTransitionEnd', removeElement)
        .emulateTransitionEnd(Alert.TRANSITION_DURATION) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.alert')

      if (!data) $this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.alert

  $.fn.alert             = Plugin
  $.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  $.fn.alert.noConflict = function () {
    $.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);

/* ========================================================================
 * Bootstrap: button.js v3.3.5
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.$element  = $(element)
    this.options   = $.extend({}, Button.DEFAULTS, options)
    this.isLoading = false
  }

  Button.VERSION  = '3.3.5'

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var $el  = this.$element
    var val  = $el.is('input') ? 'val' : 'html'
    var data = $el.data()

    state += 'Text'

    if (data.resetText == null) $el.data('resetText', $el[val]())

    // push to event loop to allow forms to submit
    setTimeout($.proxy(function () {
      $el[val](data[state] == null ? this.options[state] : data[state])

      if (state == 'loadingText') {
        this.isLoading = true
        $el.addClass(d).attr(d, d)
      } else if (this.isLoading) {
        this.isLoading = false
        $el.removeClass(d).removeAttr(d)
      }
    }, this), 0)
  }

  Button.prototype.toggle = function () {
    var changed = true
    var $parent = this.$element.closest('[data-toggle="buttons"]')

    if ($parent.length) {
      var $input = this.$element.find('input')
      if ($input.prop('type') == 'radio') {
        if ($input.prop('checked')) changed = false
        $parent.find('.active').removeClass('active')
        this.$element.addClass('active')
      } else if ($input.prop('type') == 'checkbox') {
        if (($input.prop('checked')) !== this.$element.hasClass('active')) changed = false
        this.$element.toggleClass('active')
      }
      $input.prop('checked', this.$element.hasClass('active'))
      if (changed) $input.trigger('change')
    } else {
      this.$element.attr('aria-pressed', !this.$element.hasClass('active'))
      this.$element.toggleClass('active')
    }
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.button')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  var old = $.fn.button

  $.fn.button             = Plugin
  $.fn.button.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  $.fn.button.noConflict = function () {
    $.fn.button = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  $(document)
    .on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      var $btn = $(e.target)
      if (!$btn.hasClass('btn')) $btn = $btn.closest('.btn')
      Plugin.call($btn, 'toggle')
      if (!($(e.target).is('input[type="radio"]') || $(e.target).is('input[type="checkbox"]'))) e.preventDefault()
    })
    .on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type))
    })

}(jQuery);

/* ========================================================================
 * Bootstrap: carousel.js v3.3.5
 * http://getbootstrap.com/javascript/#carousel
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CAROUSEL CLASS DEFINITION
  // =========================

  var Carousel = function (element, options) {
    this.$element    = $(element)
    this.$indicators = this.$element.find('.carousel-indicators')
    this.options     = options
    this.paused      = null
    this.sliding     = null
    this.interval    = null
    this.$active     = null
    this.$items      = null

    this.options.keyboard && this.$element.on('keydown.bs.carousel', $.proxy(this.keydown, this))

    this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element
      .on('mouseenter.bs.carousel', $.proxy(this.pause, this))
      .on('mouseleave.bs.carousel', $.proxy(this.cycle, this))
  }

  Carousel.VERSION  = '3.3.5'

  Carousel.TRANSITION_DURATION = 600

  Carousel.DEFAULTS = {
    interval: 5000,
    pause: 'hover',
    wrap: true,
    keyboard: true
  }

  Carousel.prototype.keydown = function (e) {
    if (/input|textarea/i.test(e.target.tagName)) return
    switch (e.which) {
      case 37: this.prev(); break
      case 39: this.next(); break
      default: return
    }

    e.preventDefault()
  }

  Carousel.prototype.cycle = function (e) {
    e || (this.paused = false)

    this.interval && clearInterval(this.interval)

    this.options.interval
      && !this.paused
      && (this.interval = setInterval($.proxy(this.next, this), this.options.interval))

    return this
  }

  Carousel.prototype.getItemIndex = function (item) {
    this.$items = item.parent().children('.item')
    return this.$items.index(item || this.$active)
  }

  Carousel.prototype.getItemForDirection = function (direction, active) {
    var activeIndex = this.getItemIndex(active)
    var willWrap = (direction == 'prev' && activeIndex === 0)
                || (direction == 'next' && activeIndex == (this.$items.length - 1))
    if (willWrap && !this.options.wrap) return active
    var delta = direction == 'prev' ? -1 : 1
    var itemIndex = (activeIndex + delta) % this.$items.length
    return this.$items.eq(itemIndex)
  }

  Carousel.prototype.to = function (pos) {
    var that        = this
    var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'))

    if (pos > (this.$items.length - 1) || pos < 0) return

    if (this.sliding)       return this.$element.one('slid.bs.carousel', function () { that.to(pos) }) // yes, "slid"
    if (activeIndex == pos) return this.pause().cycle()

    return this.slide(pos > activeIndex ? 'next' : 'prev', this.$items.eq(pos))
  }

  Carousel.prototype.pause = function (e) {
    e || (this.paused = true)

    if (this.$element.find('.next, .prev').length && $.support.transition) {
      this.$element.trigger($.support.transition.end)
      this.cycle(true)
    }

    this.interval = clearInterval(this.interval)

    return this
  }

  Carousel.prototype.next = function () {
    if (this.sliding) return
    return this.slide('next')
  }

  Carousel.prototype.prev = function () {
    if (this.sliding) return
    return this.slide('prev')
  }

  Carousel.prototype.slide = function (type, next) {
    var $active   = this.$element.find('.item.active')
    var $next     = next || this.getItemForDirection(type, $active)
    var isCycling = this.interval
    var direction = type == 'next' ? 'left' : 'right'
    var that      = this

    if ($next.hasClass('active')) return (this.sliding = false)

    var relatedTarget = $next[0]
    var slideEvent = $.Event('slide.bs.carousel', {
      relatedTarget: relatedTarget,
      direction: direction
    })
    this.$element.trigger(slideEvent)
    if (slideEvent.isDefaultPrevented()) return

    this.sliding = true

    isCycling && this.pause()

    if (this.$indicators.length) {
      this.$indicators.find('.active').removeClass('active')
      var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)])
      $nextIndicator && $nextIndicator.addClass('active')
    }

    var slidEvent = $.Event('slid.bs.carousel', { relatedTarget: relatedTarget, direction: direction }) // yes, "slid"
    if ($.support.transition && this.$element.hasClass('slide')) {
      $next.addClass(type)
      $next[0].offsetWidth // force reflow
      $active.addClass(direction)
      $next.addClass(direction)
      $active
        .one('bsTransitionEnd', function () {
          $next.removeClass([type, direction].join(' ')).addClass('active')
          $active.removeClass(['active', direction].join(' '))
          that.sliding = false
          setTimeout(function () {
            that.$element.trigger(slidEvent)
          }, 0)
        })
        .emulateTransitionEnd(Carousel.TRANSITION_DURATION)
    } else {
      $active.removeClass('active')
      $next.addClass('active')
      this.sliding = false
      this.$element.trigger(slidEvent)
    }

    isCycling && this.cycle()

    return this
  }


  // CAROUSEL PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.carousel')
      var options = $.extend({}, Carousel.DEFAULTS, $this.data(), typeof option == 'object' && option)
      var action  = typeof option == 'string' ? option : options.slide

      if (!data) $this.data('bs.carousel', (data = new Carousel(this, options)))
      if (typeof option == 'number') data.to(option)
      else if (action) data[action]()
      else if (options.interval) data.pause().cycle()
    })
  }

  var old = $.fn.carousel

  $.fn.carousel             = Plugin
  $.fn.carousel.Constructor = Carousel


  // CAROUSEL NO CONFLICT
  // ====================

  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old
    return this
  }


  // CAROUSEL DATA-API
  // =================

  var clickHandler = function (e) {
    var href
    var $this   = $(this)
    var $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) // strip for ie7
    if (!$target.hasClass('carousel')) return
    var options = $.extend({}, $target.data(), $this.data())
    var slideIndex = $this.attr('data-slide-to')
    if (slideIndex) options.interval = false

    Plugin.call($target, options)

    if (slideIndex) {
      $target.data('bs.carousel').to(slideIndex)
    }

    e.preventDefault()
  }

  $(document)
    .on('click.bs.carousel.data-api', '[data-slide]', clickHandler)
    .on('click.bs.carousel.data-api', '[data-slide-to]', clickHandler)

  $(window).on('load', function () {
    $('[data-ride="carousel"]').each(function () {
      var $carousel = $(this)
      Plugin.call($carousel, $carousel.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: collapse.js v3.3.5
 * http://getbootstrap.com/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$element      = $(element)
    this.options       = $.extend({}, Collapse.DEFAULTS, options)
    this.$trigger      = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                           '[data-toggle="collapse"][data-target="#' + element.id + '"]')
    this.transitioning = null

    if (this.options.parent) {
      this.$parent = this.getParent()
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger)
    }

    if (this.options.toggle) this.toggle()
  }

  Collapse.VERSION  = '3.3.5'

  Collapse.TRANSITION_DURATION = 350

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return

    var activesData
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

    if (actives && actives.length) {
      activesData = actives.data('bs.collapse')
      if (activesData && activesData.transitioning) return
    }

    var startEvent = $.Event('show.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    if (actives && actives.length) {
      Plugin.call(actives, 'hide')
      activesData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$element
      .removeClass('collapse')
      .addClass('collapsing')[dimension](0)
      .attr('aria-expanded', true)

    this.$trigger
      .removeClass('collapsed')
      .attr('aria-expanded', true)

    this.transitioning = 1

    var complete = function () {
      this.$element
        .removeClass('collapsing')
        .addClass('collapse in')[dimension]('')
      this.transitioning = 0
      this.$element
        .trigger('shown.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    var scrollSize = $.camelCase(['scroll', dimension].join('-'))

    this.$element
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return

    var startEvent = $.Event('hide.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$element[dimension](this.$element[dimension]())[0].offsetHeight

    this.$element
      .addClass('collapsing')
      .removeClass('collapse in')
      .attr('aria-expanded', false)

    this.$trigger
      .addClass('collapsed')
      .attr('aria-expanded', false)

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$element
        .removeClass('collapsing')
        .addClass('collapse')
        .trigger('hidden.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    this.$element
      [dimension](0)
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
  }

  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']()
  }

  Collapse.prototype.getParent = function () {
    return $(this.options.parent)
      .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
      .each($.proxy(function (i, element) {
        var $element = $(element)
        this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
      }, this))
      .end()
  }

  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in')

    $element.attr('aria-expanded', isOpen)
    $trigger
      .toggleClass('collapsed', !isOpen)
      .attr('aria-expanded', isOpen)
  }

  function getTargetFromTrigger($trigger) {
    var href
    var target = $trigger.attr('data-target')
      || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

    return $(target)
  }


  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.collapse')
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
      if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.collapse

  $.fn.collapse             = Plugin
  $.fn.collapse.Constructor = Collapse


  // COLLAPSE NO CONFLICT
  // ====================

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old
    return this
  }


  // COLLAPSE DATA-API
  // =================

  $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
    var $this   = $(this)

    if (!$this.attr('data-target')) e.preventDefault()

    var $target = getTargetFromTrigger($this)
    var data    = $target.data('bs.collapse')
    var option  = data ? 'toggle' : $this.data()

    Plugin.call($target, option)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.3.5
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.3.5'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector && $(selector)

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger('hidden.bs.dropdown', relatedTarget)
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger('shown.bs.dropdown', relatedTarget)
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);

/* ========================================================================
 * Bootstrap: modal.js v3.3.5
 * http://getbootstrap.com/javascript/#modals
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // MODAL CLASS DEFINITION
  // ======================

  var Modal = function (element, options) {
    this.options             = options
    this.$body               = $(document.body)
    this.$element            = $(element)
    this.$dialog             = this.$element.find('.modal-dialog')
    this.$backdrop           = null
    this.isShown             = null
    this.originalBodyPad     = null
    this.scrollbarWidth      = 0
    this.ignoreBackdropClick = false

    if (this.options.remote) {
      this.$element
        .find('.modal-content')
        .load(this.options.remote, $.proxy(function () {
          this.$element.trigger('loaded.bs.modal')
        }, this))
    }
  }

  Modal.VERSION  = '3.3.5'

  Modal.TRANSITION_DURATION = 300
  Modal.BACKDROP_TRANSITION_DURATION = 150

  Modal.DEFAULTS = {
    backdrop: true,
    keyboard: true,
    show: true
  }

  Modal.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget)
  }

  Modal.prototype.show = function (_relatedTarget) {
    var that = this
    var e    = $.Event('show.bs.modal', { relatedTarget: _relatedTarget })

    this.$element.trigger(e)

    if (this.isShown || e.isDefaultPrevented()) return

    this.isShown = true

    this.checkScrollbar()
    this.setScrollbar()
    this.$body.addClass('modal-open')

    this.escape()
    this.resize()

    this.$element.on('click.dismiss.bs.modal', '[data-dismiss="modal"]', $.proxy(this.hide, this))

    this.$dialog.on('mousedown.dismiss.bs.modal', function () {
      that.$element.one('mouseup.dismiss.bs.modal', function (e) {
        if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true
      })
    })

    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass('fade')

      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body) // don't move modals dom position
      }

      that.$element
        .show()
        .scrollTop(0)

      that.adjustDialog()

      if (transition) {
        that.$element[0].offsetWidth // force reflow
      }

      that.$element.addClass('in')

      that.enforceFocus()

      var e = $.Event('shown.bs.modal', { relatedTarget: _relatedTarget })

      transition ?
        that.$dialog // wait for modal to slide in
          .one('bsTransitionEnd', function () {
            that.$element.trigger('focus').trigger(e)
          })
          .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
        that.$element.trigger('focus').trigger(e)
    })
  }

  Modal.prototype.hide = function (e) {
    if (e) e.preventDefault()

    e = $.Event('hide.bs.modal')

    this.$element.trigger(e)

    if (!this.isShown || e.isDefaultPrevented()) return

    this.isShown = false

    this.escape()
    this.resize()

    $(document).off('focusin.bs.modal')

    this.$element
      .removeClass('in')
      .off('click.dismiss.bs.modal')
      .off('mouseup.dismiss.bs.modal')

    this.$dialog.off('mousedown.dismiss.bs.modal')

    $.support.transition && this.$element.hasClass('fade') ?
      this.$element
        .one('bsTransitionEnd', $.proxy(this.hideModal, this))
        .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
      this.hideModal()
  }

  Modal.prototype.enforceFocus = function () {
    $(document)
      .off('focusin.bs.modal') // guard against infinite focus loop
      .on('focusin.bs.modal', $.proxy(function (e) {
        if (this.$element[0] !== e.target && !this.$element.has(e.target).length) {
          this.$element.trigger('focus')
        }
      }, this))
  }

  Modal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on('keydown.dismiss.bs.modal', $.proxy(function (e) {
        e.which == 27 && this.hide()
      }, this))
    } else if (!this.isShown) {
      this.$element.off('keydown.dismiss.bs.modal')
    }
  }

  Modal.prototype.resize = function () {
    if (this.isShown) {
      $(window).on('resize.bs.modal', $.proxy(this.handleUpdate, this))
    } else {
      $(window).off('resize.bs.modal')
    }
  }

  Modal.prototype.hideModal = function () {
    var that = this
    this.$element.hide()
    this.backdrop(function () {
      that.$body.removeClass('modal-open')
      that.resetAdjustments()
      that.resetScrollbar()
      that.$element.trigger('hidden.bs.modal')
    })
  }

  Modal.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove()
    this.$backdrop = null
  }

  Modal.prototype.backdrop = function (callback) {
    var that = this
    var animate = this.$element.hasClass('fade') ? 'fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate

      this.$backdrop = $(document.createElement('div'))
        .addClass('modal-backdrop ' + animate)
        .appendTo(this.$body)

      this.$element.on('click.dismiss.bs.modal', $.proxy(function (e) {
        if (this.ignoreBackdropClick) {
          this.ignoreBackdropClick = false
          return
        }
        if (e.target !== e.currentTarget) return
        this.options.backdrop == 'static'
          ? this.$element[0].focus()
          : this.hide()
      }, this))

      if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

      this.$backdrop.addClass('in')

      if (!callback) return

      doAnimate ?
        this.$backdrop
          .one('bsTransitionEnd', callback)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callback()

    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in')

      var callbackRemove = function () {
        that.removeBackdrop()
        callback && callback()
      }
      $.support.transition && this.$element.hasClass('fade') ?
        this.$backdrop
          .one('bsTransitionEnd', callbackRemove)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callbackRemove()

    } else if (callback) {
      callback()
    }
  }

  // these following methods are used to handle overflowing modals

  Modal.prototype.handleUpdate = function () {
    this.adjustDialog()
  }

  Modal.prototype.adjustDialog = function () {
    var modalIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight

    this.$element.css({
      paddingLeft:  !this.bodyIsOverflowing && modalIsOverflowing ? this.scrollbarWidth : '',
      paddingRight: this.bodyIsOverflowing && !modalIsOverflowing ? this.scrollbarWidth : ''
    })
  }

  Modal.prototype.resetAdjustments = function () {
    this.$element.css({
      paddingLeft: '',
      paddingRight: ''
    })
  }

  Modal.prototype.checkScrollbar = function () {
    var fullWindowWidth = window.innerWidth
    if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
      var documentElementRect = document.documentElement.getBoundingClientRect()
      fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
    }
    this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
    this.scrollbarWidth = this.measureScrollbar()
  }

  Modal.prototype.setScrollbar = function () {
    var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
    this.originalBodyPad = document.body.style.paddingRight || ''
    if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
  }

  Modal.prototype.resetScrollbar = function () {
    this.$body.css('padding-right', this.originalBodyPad)
  }

  Modal.prototype.measureScrollbar = function () { // thx walsh
    var scrollDiv = document.createElement('div')
    scrollDiv.className = 'modal-scrollbar-measure'
    this.$body.append(scrollDiv)
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
    this.$body[0].removeChild(scrollDiv)
    return scrollbarWidth
  }


  // MODAL PLUGIN DEFINITION
  // =======================

  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.modal')
      var options = $.extend({}, Modal.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data) $this.data('bs.modal', (data = new Modal(this, options)))
      if (typeof option == 'string') data[option](_relatedTarget)
      else if (options.show) data.show(_relatedTarget)
    })
  }

  var old = $.fn.modal

  $.fn.modal             = Plugin
  $.fn.modal.Constructor = Modal


  // MODAL NO CONFLICT
  // =================

  $.fn.modal.noConflict = function () {
    $.fn.modal = old
    return this
  }


  // MODAL DATA-API
  // ==============

  $(document).on('click.bs.modal.data-api', '[data-toggle="modal"]', function (e) {
    var $this   = $(this)
    var href    = $this.attr('href')
    var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7
    var option  = $target.data('bs.modal') ? 'toggle' : $.extend({ remote: !/#/.test(href) && href }, $target.data(), $this.data())

    if ($this.is('a')) e.preventDefault()

    $target.one('show.bs.modal', function (showEvent) {
      if (showEvent.isDefaultPrevented()) return // only register focus restorer if modal will actually get shown
      $target.one('hidden.bs.modal', function () {
        $this.is(':visible') && $this.trigger('focus')
      })
    })
    Plugin.call($target, option, this)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tooltip.js v3.3.5
 * http://getbootstrap.com/javascript/#tooltip
 * Inspired by the original jQuery.tipsy by Jason Frame
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TOOLTIP PUBLIC CLASS DEFINITION
  // ===============================

  var Tooltip = function (element, options) {
    this.type       = null
    this.options    = null
    this.enabled    = null
    this.timeout    = null
    this.hoverState = null
    this.$element   = null
    this.inState    = null

    this.init('tooltip', element, options)
  }

  Tooltip.VERSION  = '3.3.5'

  Tooltip.TRANSITION_DURATION = 150

  Tooltip.DEFAULTS = {
    animation: true,
    placement: 'top',
    selector: false,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: 'hover focus',
    title: '',
    delay: 0,
    html: false,
    container: false,
    viewport: {
      selector: 'body',
      padding: 0
    }
  }

  Tooltip.prototype.init = function (type, element, options) {
    this.enabled   = true
    this.type      = type
    this.$element  = $(element)
    this.options   = this.getOptions(options)
    this.$viewport = this.options.viewport && $($.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : (this.options.viewport.selector || this.options.viewport))
    this.inState   = { click: false, hover: false, focus: false }

    if (this.$element[0] instanceof document.constructor && !this.options.selector) {
      throw new Error('`selector` option must be specified when initializing ' + this.type + ' on the window.document object!')
    }

    var triggers = this.options.trigger.split(' ')

    for (var i = triggers.length; i--;) {
      var trigger = triggers[i]

      if (trigger == 'click') {
        this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this))
      } else if (trigger != 'manual') {
        var eventIn  = trigger == 'hover' ? 'mouseenter' : 'focusin'
        var eventOut = trigger == 'hover' ? 'mouseleave' : 'focusout'

        this.$element.on(eventIn  + '.' + this.type, this.options.selector, $.proxy(this.enter, this))
        this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this))
      }
    }

    this.options.selector ?
      (this._options = $.extend({}, this.options, { trigger: 'manual', selector: '' })) :
      this.fixTitle()
  }

  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS
  }

  Tooltip.prototype.getOptions = function (options) {
    options = $.extend({}, this.getDefaults(), this.$element.data(), options)

    if (options.delay && typeof options.delay == 'number') {
      options.delay = {
        show: options.delay,
        hide: options.delay
      }
    }

    return options
  }

  Tooltip.prototype.getDelegateOptions = function () {
    var options  = {}
    var defaults = this.getDefaults()

    this._options && $.each(this._options, function (key, value) {
      if (defaults[key] != value) options[key] = value
    })

    return options
  }

  Tooltip.prototype.enter = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusin' ? 'focus' : 'hover'] = true
    }

    if (self.tip().hasClass('in') || self.hoverState == 'in') {
      self.hoverState = 'in'
      return
    }

    clearTimeout(self.timeout)

    self.hoverState = 'in'

    if (!self.options.delay || !self.options.delay.show) return self.show()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'in') self.show()
    }, self.options.delay.show)
  }

  Tooltip.prototype.isInStateTrue = function () {
    for (var key in this.inState) {
      if (this.inState[key]) return true
    }

    return false
  }

  Tooltip.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusout' ? 'focus' : 'hover'] = false
    }

    if (self.isInStateTrue()) return

    clearTimeout(self.timeout)

    self.hoverState = 'out'

    if (!self.options.delay || !self.options.delay.hide) return self.hide()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'out') self.hide()
    }, self.options.delay.hide)
  }

  Tooltip.prototype.show = function () {
    var e = $.Event('show.bs.' + this.type)

    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e)

      var inDom = $.contains(this.$element[0].ownerDocument.documentElement, this.$element[0])
      if (e.isDefaultPrevented() || !inDom) return
      var that = this

      var $tip = this.tip()

      var tipId = this.getUID(this.type)

      this.setContent()
      $tip.attr('id', tipId)
      this.$element.attr('aria-describedby', tipId)

      if (this.options.animation) $tip.addClass('fade')

      var placement = typeof this.options.placement == 'function' ?
        this.options.placement.call(this, $tip[0], this.$element[0]) :
        this.options.placement

      var autoToken = /\s?auto?\s?/i
      var autoPlace = autoToken.test(placement)
      if (autoPlace) placement = placement.replace(autoToken, '') || 'top'

      $tip
        .detach()
        .css({ top: 0, left: 0, display: 'block' })
        .addClass(placement)
        .data('bs.' + this.type, this)

      this.options.container ? $tip.appendTo(this.options.container) : $tip.insertAfter(this.$element)
      this.$element.trigger('inserted.bs.' + this.type)

      var pos          = this.getPosition()
      var actualWidth  = $tip[0].offsetWidth
      var actualHeight = $tip[0].offsetHeight

      if (autoPlace) {
        var orgPlacement = placement
        var viewportDim = this.getPosition(this.$viewport)

        placement = placement == 'bottom' && pos.bottom + actualHeight > viewportDim.bottom ? 'top'    :
                    placement == 'top'    && pos.top    - actualHeight < viewportDim.top    ? 'bottom' :
                    placement == 'right'  && pos.right  + actualWidth  > viewportDim.width  ? 'left'   :
                    placement == 'left'   && pos.left   - actualWidth  < viewportDim.left   ? 'right'  :
                    placement

        $tip
          .removeClass(orgPlacement)
          .addClass(placement)
      }

      var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight)

      this.applyPlacement(calculatedOffset, placement)

      var complete = function () {
        var prevHoverState = that.hoverState
        that.$element.trigger('shown.bs.' + that.type)
        that.hoverState = null

        if (prevHoverState == 'out') that.leave(that)
      }

      $.support.transition && this.$tip.hasClass('fade') ?
        $tip
          .one('bsTransitionEnd', complete)
          .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
        complete()
    }
  }

  Tooltip.prototype.applyPlacement = function (offset, placement) {
    var $tip   = this.tip()
    var width  = $tip[0].offsetWidth
    var height = $tip[0].offsetHeight

    // manually read margins because getBoundingClientRect includes difference
    var marginTop = parseInt($tip.css('margin-top'), 10)
    var marginLeft = parseInt($tip.css('margin-left'), 10)

    // we must check for NaN for ie 8/9
    if (isNaN(marginTop))  marginTop  = 0
    if (isNaN(marginLeft)) marginLeft = 0

    offset.top  += marginTop
    offset.left += marginLeft

    // $.fn.offset doesn't round pixel values
    // so we use setOffset directly with our own function B-0
    $.offset.setOffset($tip[0], $.extend({
      using: function (props) {
        $tip.css({
          top: Math.round(props.top),
          left: Math.round(props.left)
        })
      }
    }, offset), 0)

    $tip.addClass('in')

    // check to see if placing tip in new offset caused the tip to resize itself
    var actualWidth  = $tip[0].offsetWidth
    var actualHeight = $tip[0].offsetHeight

    if (placement == 'top' && actualHeight != height) {
      offset.top = offset.top + height - actualHeight
    }

    var delta = this.getViewportAdjustedDelta(placement, offset, actualWidth, actualHeight)

    if (delta.left) offset.left += delta.left
    else offset.top += delta.top

    var isVertical          = /top|bottom/.test(placement)
    var arrowDelta          = isVertical ? delta.left * 2 - width + actualWidth : delta.top * 2 - height + actualHeight
    var arrowOffsetPosition = isVertical ? 'offsetWidth' : 'offsetHeight'

    $tip.offset(offset)
    this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], isVertical)
  }

  Tooltip.prototype.replaceArrow = function (delta, dimension, isVertical) {
    this.arrow()
      .css(isVertical ? 'left' : 'top', 50 * (1 - delta / dimension) + '%')
      .css(isVertical ? 'top' : 'left', '')
  }

  Tooltip.prototype.setContent = function () {
    var $tip  = this.tip()
    var title = this.getTitle()

    $tip.find('.tooltip-inner')[this.options.html ? 'html' : 'text'](title)
    $tip.removeClass('fade in top bottom left right')
  }

  Tooltip.prototype.hide = function (callback) {
    var that = this
    var $tip = $(this.$tip)
    var e    = $.Event('hide.bs.' + this.type)

    function complete() {
      if (that.hoverState != 'in') $tip.detach()
      that.$element
        .removeAttr('aria-describedby')
        .trigger('hidden.bs.' + that.type)
      callback && callback()
    }

    this.$element.trigger(e)

    if (e.isDefaultPrevented()) return

    $tip.removeClass('in')

    $.support.transition && $tip.hasClass('fade') ?
      $tip
        .one('bsTransitionEnd', complete)
        .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
      complete()

    this.hoverState = null

    return this
  }

  Tooltip.prototype.fixTitle = function () {
    var $e = this.$element
    if ($e.attr('title') || typeof $e.attr('data-original-title') != 'string') {
      $e.attr('data-original-title', $e.attr('title') || '').attr('title', '')
    }
  }

  Tooltip.prototype.hasContent = function () {
    return this.getTitle()
  }

  Tooltip.prototype.getPosition = function ($element) {
    $element   = $element || this.$element

    var el     = $element[0]
    var isBody = el.tagName == 'BODY'

    var elRect    = el.getBoundingClientRect()
    if (elRect.width == null) {
      // width and height are missing in IE8, so compute them manually; see https://github.com/twbs/bootstrap/issues/14093
      elRect = $.extend({}, elRect, { width: elRect.right - elRect.left, height: elRect.bottom - elRect.top })
    }
    var elOffset  = isBody ? { top: 0, left: 0 } : $element.offset()
    var scroll    = { scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop() }
    var outerDims = isBody ? { width: $(window).width(), height: $(window).height() } : null

    return $.extend({}, elRect, scroll, outerDims, elOffset)
  }

  Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return placement == 'bottom' ? { top: pos.top + pos.height,   left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'top'    ? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'left'   ? { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth } :
        /* placement == 'right' */ { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width }

  }

  Tooltip.prototype.getViewportAdjustedDelta = function (placement, pos, actualWidth, actualHeight) {
    var delta = { top: 0, left: 0 }
    if (!this.$viewport) return delta

    var viewportPadding = this.options.viewport && this.options.viewport.padding || 0
    var viewportDimensions = this.getPosition(this.$viewport)

    if (/right|left/.test(placement)) {
      var topEdgeOffset    = pos.top - viewportPadding - viewportDimensions.scroll
      var bottomEdgeOffset = pos.top + viewportPadding - viewportDimensions.scroll + actualHeight
      if (topEdgeOffset < viewportDimensions.top) { // top overflow
        delta.top = viewportDimensions.top - topEdgeOffset
      } else if (bottomEdgeOffset > viewportDimensions.top + viewportDimensions.height) { // bottom overflow
        delta.top = viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset
      }
    } else {
      var leftEdgeOffset  = pos.left - viewportPadding
      var rightEdgeOffset = pos.left + viewportPadding + actualWidth
      if (leftEdgeOffset < viewportDimensions.left) { // left overflow
        delta.left = viewportDimensions.left - leftEdgeOffset
      } else if (rightEdgeOffset > viewportDimensions.right) { // right overflow
        delta.left = viewportDimensions.left + viewportDimensions.width - rightEdgeOffset
      }
    }

    return delta
  }

  Tooltip.prototype.getTitle = function () {
    var title
    var $e = this.$element
    var o  = this.options

    title = $e.attr('data-original-title')
      || (typeof o.title == 'function' ? o.title.call($e[0]) :  o.title)

    return title
  }

  Tooltip.prototype.getUID = function (prefix) {
    do prefix += ~~(Math.random() * 1000000)
    while (document.getElementById(prefix))
    return prefix
  }

  Tooltip.prototype.tip = function () {
    if (!this.$tip) {
      this.$tip = $(this.options.template)
      if (this.$tip.length != 1) {
        throw new Error(this.type + ' `template` option must consist of exactly 1 top-level element!')
      }
    }
    return this.$tip
  }

  Tooltip.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.tooltip-arrow'))
  }

  Tooltip.prototype.enable = function () {
    this.enabled = true
  }

  Tooltip.prototype.disable = function () {
    this.enabled = false
  }

  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled
  }

  Tooltip.prototype.toggle = function (e) {
    var self = this
    if (e) {
      self = $(e.currentTarget).data('bs.' + this.type)
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions())
        $(e.currentTarget).data('bs.' + this.type, self)
      }
    }

    if (e) {
      self.inState.click = !self.inState.click
      if (self.isInStateTrue()) self.enter(self)
      else self.leave(self)
    } else {
      self.tip().hasClass('in') ? self.leave(self) : self.enter(self)
    }
  }

  Tooltip.prototype.destroy = function () {
    var that = this
    clearTimeout(this.timeout)
    this.hide(function () {
      that.$element.off('.' + that.type).removeData('bs.' + that.type)
      if (that.$tip) {
        that.$tip.detach()
      }
      that.$tip = null
      that.$arrow = null
      that.$viewport = null
    })
  }


  // TOOLTIP PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.tooltip')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.tooltip', (data = new Tooltip(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tooltip

  $.fn.tooltip             = Plugin
  $.fn.tooltip.Constructor = Tooltip


  // TOOLTIP NO CONFLICT
  // ===================

  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: popover.js v3.3.5
 * http://getbootstrap.com/javascript/#popovers
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!$.fn.tooltip) throw new Error('Popover requires tooltip.js')

  Popover.VERSION  = '3.3.5'

  Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right',
    trigger: 'click',
    content: '',
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var $tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    $tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title)
    $tip.find('.popover-content').children().detach().end()[ // we use append for html objects to maintain js events
      this.options.html ? (typeof content == 'string' ? 'html' : 'append') : 'text'
    ](content)

    $tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-title').html()) $tip.find('.popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var $e = this.$element
    var o  = this.options

    return $e.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call($e[0]) :
            o.content)
  }

  Popover.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.arrow'))
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.popover')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.popover

  $.fn.popover             = Plugin
  $.fn.popover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  $.fn.popover.noConflict = function () {
    $.fn.popover = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.3.5
 * http://getbootstrap.com/javascript/#scrollspy
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    this.$body          = $(document.body)
    this.$scrollElement = $(element).is(document.body) ? $(window) : $(element)
    this.options        = $.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target || '') + ' .nav li > a'
    this.offsets        = []
    this.targets        = []
    this.activeTarget   = null
    this.scrollHeight   = 0

    this.$scrollElement.on('scroll.bs.scrollspy', $.proxy(this.process, this))
    this.refresh()
    this.process()
  }

  ScrollSpy.VERSION  = '3.3.5'

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
  }

  ScrollSpy.prototype.refresh = function () {
    var that          = this
    var offsetMethod  = 'offset'
    var offsetBase    = 0

    this.offsets      = []
    this.targets      = []
    this.scrollHeight = this.getScrollHeight()

    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = 'position'
      offsetBase   = this.$scrollElement.scrollTop()
    }

    this.$body
      .find(this.selector)
      .map(function () {
        var $el   = $(this)
        var href  = $el.data('target') || $el.attr('href')
        var $href = /^#./.test(href) && $(href)

        return ($href
          && $href.length
          && $href.is(':visible')
          && [[$href[offsetMethod]().top + offsetBase, href]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        that.offsets.push(this[0])
        that.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.getScrollHeight()
    var maxScroll    = this.options.offset + scrollHeight - this.$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (this.scrollHeight != scrollHeight) {
      this.refresh()
    }

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
    }

    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null
      return this.clear()
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1])
        && this.activate(targets[i])
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    this.clear()

    var selector = this.selector +
      '[data-target="' + target + '"],' +
      this.selector + '[href="' + target + '"]'

    var active = $(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length) {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }

  ScrollSpy.prototype.clear = function () {
    $(this.selector)
      .parentsUntil(this.options.target, '.active')
      .removeClass('active')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.scrollspy

  $.fn.scrollspy             = Plugin
  $.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  $(window).on('load.bs.scrollspy.data-api', function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this)
      Plugin.call($spy, $spy.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tab.js v3.3.5
 * http://getbootstrap.com/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    // jscs:disable requireDollarBeforejQueryAssignment
    this.element = $(element)
    // jscs:enable requireDollarBeforejQueryAssignment
  }

  Tab.VERSION = '3.3.5'

  Tab.TRANSITION_DURATION = 150

  Tab.prototype.show = function () {
    var $this    = this.element
    var $ul      = $this.closest('ul:not(.dropdown-menu)')
    var selector = $this.data('target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    if ($this.parent('li').hasClass('active')) return

    var $previous = $ul.find('.active:last a')
    var hideEvent = $.Event('hide.bs.tab', {
      relatedTarget: $this[0]
    })
    var showEvent = $.Event('show.bs.tab', {
      relatedTarget: $previous[0]
    })

    $previous.trigger(hideEvent)
    $this.trigger(showEvent)

    if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

    var $target = $(selector)

    this.activate($this.closest('li'), $ul)
    this.activate($target, $target.parent(), function () {
      $previous.trigger({
        type: 'hidden.bs.tab',
        relatedTarget: $this[0]
      })
      $this.trigger({
        type: 'shown.bs.tab',
        relatedTarget: $previous[0]
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var $active    = container.find('> .active')
    var transition = callback
      && $.support.transition
      && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

    function next() {
      $active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
          .removeClass('active')
        .end()
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', false)

      element
        .addClass('active')
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', true)

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu').length) {
        element
          .closest('li.dropdown')
            .addClass('active')
          .end()
          .find('[data-toggle="tab"]')
            .attr('aria-expanded', true)
      }

      callback && callback()
    }

    $active.length && transition ?
      $active
        .one('bsTransitionEnd', next)
        .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
      next()

    $active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.tab')

      if (!data) $this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tab

  $.fn.tab             = Plugin
  $.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  $.fn.tab.noConflict = function () {
    $.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  var clickHandler = function (e) {
    e.preventDefault()
    Plugin.call($(this), 'show')
  }

  $(document)
    .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
    .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

}(jQuery);

/* ========================================================================
 * Bootstrap: affix.js v3.3.5
 * http://getbootstrap.com/javascript/#affix
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = $.extend({}, Affix.DEFAULTS, options)

    this.$target = $(this.options.target)
      .on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  $.proxy(this.checkPositionWithEventLoop, this))

    this.$element     = $(element)
    this.affixed      = null
    this.unpin        = null
    this.pinnedOffset = null

    this.checkPosition()
  }

  Affix.VERSION  = '3.3.5'

  Affix.RESET    = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0,
    target: window
  }

  Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
    var scrollTop    = this.$target.scrollTop()
    var position     = this.$element.offset()
    var targetHeight = this.$target.height()

    if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false

    if (this.affixed == 'bottom') {
      if (offsetTop != null) return (scrollTop + this.unpin <= position.top) ? false : 'bottom'
      return (scrollTop + targetHeight <= scrollHeight - offsetBottom) ? false : 'bottom'
    }

    var initializing   = this.affixed == null
    var colliderTop    = initializing ? scrollTop : position.top
    var colliderHeight = initializing ? targetHeight : height

    if (offsetTop != null && scrollTop <= offsetTop) return 'top'
    if (offsetBottom != null && (colliderTop + colliderHeight >= scrollHeight - offsetBottom)) return 'bottom'

    return false
  }

  Affix.prototype.getPinnedOffset = function () {
    if (this.pinnedOffset) return this.pinnedOffset
    this.$element.removeClass(Affix.RESET).addClass('affix')
    var scrollTop = this.$target.scrollTop()
    var position  = this.$element.offset()
    return (this.pinnedOffset = position.top - scrollTop)
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return

    var height       = this.$element.height()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom
    var scrollHeight = Math.max($(document).height(), $(document.body).height())

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top(this.$element)
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element)

    var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom)

    if (this.affixed != affix) {
      if (this.unpin != null) this.$element.css('top', '')

      var affixType = 'affix' + (affix ? '-' + affix : '')
      var e         = $.Event(affixType + '.bs.affix')

      this.$element.trigger(e)

      if (e.isDefaultPrevented()) return

      this.affixed = affix
      this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null

      this.$element
        .removeClass(Affix.RESET)
        .addClass(affixType)
        .trigger(affixType.replace('affix', 'affixed') + '.bs.affix')
    }

    if (affix == 'bottom') {
      this.$element.offset({
        top: scrollHeight - height - offsetBottom
      })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.affix')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.affix

  $.fn.affix             = Plugin
  $.fn.affix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  $.fn.affix.noConflict = function () {
    $.fn.affix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  $(window).on('load', function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this)
      var data = $spy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom
      if (data.offsetTop    != null) data.offset.top    = data.offsetTop

      Plugin.call($spy, data)
    })
  })

    var sourceSwap = function () {
        var $this = $(this);
        var newSource = $this.data('alt-src');
        $this.data('alt-src', $this.attr('src'));
        $this.attr('src', newSource);
    }

    $(function() {
        $('img[data-alt-src]').each(function() { 
            new Image().src = $(this).data('alt-src'); 
        }).hover(sourceSwap, sourceSwap); 
    });

//defino una serie de varibles Array para cada ciudad
var continente1 = new Array('-', "Badakhshan", "Badghis", "Baghlan", "Balkh", "Bamian", "Farah", "Faryab", "Ghazni", "Ghowr", "Helmand", "Herat", "Jowzjan", "Kabol", "Kandahar", "Kapisa", "Khowst", "Konar", "Konar", "Kondoz", "Laghman", "Laghman", "Lowgar", "Nangarhar", "Nimruz", "Nurestan", "Oruzgan", "Paktia", "Paktia", "Paktika", "Parvan", "Samangan", "Sar-e Pol", "Takhar", "Vardak", "Zabol");
var continente2 = new Array('-', "Berat", "Diber", "Durres", "Elbasan", "Fier", "Gjirokaster", "Korce", "Kukes", "Lezhe", "Shkoder", "Tirane", "Vlore");
var continente3 = new Array('-', "Baden-Wberg Bayern", "Berlin", "Brandenburg", "Bremen", "Hamburg", "Hessen", "Mecklenburg-Vorpommern", "Niedersachsen", "Nordrhein-Westfalen", "Rheinland-Pfalz", "Saarland", "Sachsen", "Sachsen-Anhalt", "Schleswig-Holstein", "Thuringen");
var continente4 = new Array('-', "American Samoa (General)");
var continente5 = new Array('-', "Andorra la Vella", "Canillo", "Encamp", "Escaldes-Engordany", "La Massana", "Ordino", "Sant Julia de Loria", "Barbuda", "Saint George", "Saint John", "Saint Mary", "Saint Paul", "Saint Peter", "Saint Philip");
var continente6 = new Array('-', "Bengo", "Benguela", "Bie", "Cabinda", "Cuando Cubango", "Cuanza Norte", "Cuanza Sul", "Cunene", "Huambo", "Huila", "Luanda", "Luanda Province", "Lunda Norte", "Lunda Sul", "Malanje", "Moxico", "Uige", "Zaire");
var continente7 = new Array('-', "Anguilla (General)");
var continente8 = new Array('-', "Barbuda", "Saint George", "Saint John", "Saint Mary", "Saint Paul", "Saint Peter", "Saint Philip");
var continente9 = new Array('-', "Netherlands Antilles (General)");
var continente10 = new Array('-', "Antarctica (General)");
var continente11 = new Array('-', "Al Bahah", "Al Hudud ash Shamaliyah", "Al Jawf", "Al Jawf", "Al Madinah", "Al Qasim", "Al Qurayyat", "Ar Riyad", "Ash Sharqiyah", "Hail", "Jizan", "Makkah", "Najran", "Tabuk");
var continente12 = new Array('-', "Adrar", "Ain Defla", "Ain Temouchent", "Alger", "Annaba", "Batna", "Bechar", "Bejaia", "Biskra", "Blida", "Bordj Bou Arreridj", "Bouira", "Boumerdes", "Chlef", "Constantine", "Djelfa", "El Bayadh", "El Oued", "El Tarf", "Ghardaia", "Guelma", "Illizi", "Jijel", "Khenchela", "Laghouat", "Msila", "Mascara", "Medea", "Mila", "Mostaganem", "Naama", "Oran", "Ouargla", "Oum el Bouaghi", "Relizane", "Saida", "Setif", "Sidi Bel Abbes", "Skikda", "Souk Ahras", "Tamanghasset", "Tebessa", "Tiaret", "Tindouf", "Tipaza", "Tissemsilt", "Tizi Ouzou", "Tlemcen");
var continente13 = new Array('-', "Buenos Aires", "Catamarca", "Chaco", "Chubut", "Cordoba", "Corrientes", "Distrito Federal", "Entre Rios", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquen", "Rio Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Santiago del Estero", "Tierra del Fuego", "Tucuman");
var continente14 = new Array('-', "Aragatsotn", "Ararat", "Armavir", "Gegharkunik", "Kotayk", "Lorri", "Shirak", "Syunik", "Tavush", "Vayots Dzor", "Yerevan");
var continente15 = new Array('-', "Aruba (General)");
var continente17 = new Array('-', "Australian Capital Territory", "New South Wales", "Northern Territory", "Queensland", "South Australia", "Tasmania", "Victoria", "Western Australia");
var continente18 = new Array('-', "Burgenland", "Karnten", "Niederosterreich", "Oberosterreich", "Salzburg", "Steiermark", "Tirol", "Vorarlberg", "Wien");
var continente19 = new Array('-', "Abseron", "Agcabadi", "Agdam", "Agdas", "Agstafa", "Agsu", "Ali Bayramli", "Astara", "Baki", "Balakan", "Barda", "Beylaqan", "Bilasuvar", "Cabrayil", "Calilabad", "Daskasan", "Davaci", "Fuzuli", "Gadabay", "Ganca", "Goranboy", "Goycay", "Haciqabul", "Imisli", "Ismayilli", "Kalbacar", "Kurdamir", "Lacin", "Lankaran", "Lankaran", "Lerik", "Masalli", "Mingacevir", "Naftalan", "Naxcivan", "Neftcala", "Oguz", "Qabala", "Qax", "Qazax", "Qobustan", "Quba", "Qubadli", "Qusar", "Saatli", "Sabirabad", "Saki", "Saki", "Salyan", "Samaxi", "Samkir", "Samux", "Siyazan", "Sumqayit", "Susa", "Susa", "Tartar", "Tovuz", "Ucar", "Xacmaz", "Xankandi", "Xanlar", "Xizi", "Xocali", "Xocavand", "Yardimli", "Yevlax", "Yevlax", "Zangilan", "Zaqatala", "Zardab");
var continente20 = new Array('-', "Acklins and Crooked Islands", "Bimini", "Cat Island", "Exuma", "Freeport", "Fresh Creek", "Governors Harbour", "Green Turtle Cay", "Harbour Island", "High Rock", "Inagua", "Kemps Bay", "Long Island", "Marsh Harbour", "Mayaguana", "New Providence", "Nichollstown and Berry Islands", "Ragged Island", "Rock Sound", "San Salvador and Rum Cay", "Sandy Point");
var continente21 = new Array('-', "Al Hadd", "Al Manamah", "Al Mintaqah al Gharbiyah", "Al Mintaqah al Wusta", "Al Mintaqah ash Shamaliyah", "Al Muharraq", "Ar Rifa", "Jidd Hafs", "Madinat", "Madinat Hamad", "Mintaqat Juzur Hawar", "Sitrah");
var continente22 = new Array('-', "Bagerhat", "Bandarban", "Barguna", "Barisal", "Barisal Division", "Bhola", "Bogra", "Brahmanbaria", "Chandpur", "Chapai Nawabganj", "Chattagram", "Chuadanga", "Comilla", "Coxs Bazar", "Dhaka", "Dhaka Division", "Dinajpur", "Faridpur", "Feni", "Gaibandha", "Gazipur", "Gopalganj", "Habiganj", "Jaipurhat", "Jamalpur", "Jessore", "Jhalakati", "Jhenaidah", "Khagrachari", "Khulna", "Khulna Division", "Kishorganj", "Kurigram", "Kushtia", "Laksmipur", "Lalmonirhat", "Madaripur", "Magura", "Manikganj", "Meherpur", "Moulavibazar", "Munshiganj", "Mymensingh", "Naogaon", "Narail", "Narayanganj", "Narsingdi", "Nator", "Netrakona", "Nilphamari", "Noakhali", "Pabna", "Panchagar", "Parbattya Chattagram", "Patuakhali", "Pirojpur", "Rajbari", "Rajshahi", "Rangpur", "Rajshahi Division", "Satkhira", "Shariyatpur", "Sherpur", "Sirajganj", "Sunamganj", "Sylhet", "Sylhet Division", "Tangail", "Thakurgaon");
var continente23 = new Array('-', "Christ Church", "Saint Andrew", "Saint George", "Saint James", "Saint John", "Saint Joseph", "Saint Lucy", "Saint Michael", "Saint Peter", "Saint Philip", "Saint Thomas");
var continente24 = new Array('-', "Belize", "Cayo", "Corozal", "Orange Walk", "Stann Creek", "Toledo");
var continente25 = new Array('-', "Atakora", "Atlantique", "Borgou", "Littoral Department", "Mono", "Oueme", "Zou");
var continente26 = new Array('-', "Devonshire", "Hamilton", "Hamilton", "Paget", "Pembroke", "Saint George", "Saint Georges", "Sandys", "Smiths", "Southampton", "Warwick");
var continente27 = new Array('-', "Brestskaya Voblasts", "Homyel skaya Voblasts", "Hrodzyenskaya Voblasts", "Mahilyowskaya Voblasts", "Minsk", "Minskaya Voblasts", "Vitsyebskaya Voblasts");
var continente28 = new Array('-', "Chuquisaca", "Cochabamba", "El Beni", "La Paz", "Oruro", "Pando", "Potosi", "Santa Cruz", "Tarija");
var continente29 = new Array('-', "Bosanska Dubica", "Federation of Bosnia and Herzegovina", "Republika Srpska");
var continente30 = new Array('-', "Central", "Chobe", "Ghanzi", "Kgalagadi", "Kgatleng", "Kweneng", "Ngamiland", "North-East", "South-East", "Southern");
var continente31 = new Array('-', "Bouvet Island (General)");
var continente32 = new Array('-', "Acre", "Alagoas", "Amapa", "Amazonas", "Bahia", "Ceara", "Distrito Federal", "Espirito Santo", "Goias", "Maranhao", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Para", "Paraiba", "Parana", "Pernambuco", "Piaui", "Rio Grande do Norte", "Rio Grande do Sul", "Rio de Janeiro", "Rondonia", "Roraima", "Santa Catarina", "Sao Paulo", "Sergipe", "Tocantins");
var continente33 = new Array('-', "British Indian Ocean Territory (General)");
var continente34 = new Array('-', "Alibori", "Belait", "Brunei and Muara", "Collines", "Donga", "Kouffo", "Littoral", "Oueme", "Plateau", "Temburong", "Tutong", "Zou");
var continente35 = new Array('-', "Blagoevgrad", "Burgas", "Dobrich", "Gabrovo", "Grad Sofiya", "Khaskovo", "Kurdzhali", "Kyustendil", "Lovech", "Mikhaylovgrad", "Montana", "Pazardzhik", "Pernik", "Pleven", "Plovdiv", "Razgrad", "Ruse", "Shumen", "Silistra", "Sliven", "Smolyan", "Sofiya", "Stara Zagora", "Turgovishte", "Varna", "Veliko Turnovo", "Vidin", "Vratsa", "Yambol");
var continente36 = new Array('-', "Bale", "Bam", "Banwa", "Bazega", "Bougouriba", "Boulgou", "Boulkiemde", "Ganzourgou", "Gnagna", "Gourma", "Houet", "Ioba", "Kadiogo", "Kenedougou", "Komoe", "Komondjari", "Kompienga", "Kossi", "Koulpelogo", "Kouritenga", "Kourweogo", "Leraba", "Loroum", "Mouhoun", "Namentenga", "Naouri", "Nayala", "Noumbiel", "Oubritenga", "Oudalan", "Passore", "Poni", "Sanguie", "Sanmatenga", "Seno", "Sissili", "Soum", "Sourou", "Tapoa", "Tuy", "Yagha", "Yatenga", "Ziro", "Zondoma", "Zoundweogo");
var continente37 = new Array('-', "Bubanza", "Bujumbura", "Bururi", "Cankuzo", "Cibitoke", "Gitega", "Karuzi", "Kayanza", "Kirundo", "Makamba", "Muramvya", "Muyinga", "Mwaro", "Ngozi", "Rutana", "Ruyigi");
var continente38 = new Array('-', "Bumthang", "Chhukha", "Chirang", "Daga", "Geylegphug", "Ha", "Lhuntshi", "Mongar", "Paro", "Pemagatsel", "Punakha", "Samchi", "Samdrup", "Shemgang", "Tashigang", "Thimphu", "Tongsa", "Wangdi Phodrang");
var continente39 = new Array('-', "Antwerpen", "Brabant", "Brabant Wallon", "Brussels Hoofdstedelijk Gewest", "Hainaut", "Liege", "Limburg", "Luxembourg", "Namur", "Oost-Vlaanderen", "Vlaams-Brabant", "West-Vlaanderen");
var continente40 = new Array('-', "Boa Vista", "Brava", "Maio", "Mosteiros", "Paul", "Praia", "Ribeira Grande", "Sal", "Santa Catarina", "Santa Cruz", "Sao Domingos", "Sao Filipe", "Sao Miguel", "Sao Nicolau", "Sao Vicente", "Tarrafal");
var continente41 = new Array('-', "Batdambang", "Kampong Cham", "Kampong Chhnang", "Kampong Spoe", "Kampong Thum", "Kampot", "Kandal", "Kaoh Kong", "Kracheh", "Mondol Kiri", "Pailin", "Phnum Penh", "Pouthisat", "Preah Vihear", "Prey Veng", "Rotanokiri", "Siemreab-Otdar Meanchey", "Stoeng Treng", "Svay Rieng", "Takev");
var continente42 = new Array('-', "Adamaoua", "Centre", "Est", "Extreme-Nord", "Littoral", "Nord", "Nord-Ouest", "Ouest", "Sud", "Sud-Ouest");
var continente43 = new Array('-');
var continente45 = new Array('-', "Batha", "Biltine", "Borkou-Ennedi-Tibesti", "Chari-Baguirmi", "Guera", "Kanem", "Lac", "Logone Occidental", "Logone Oriental", "Mayo-Kebbi", "Moyen-Chari", "Ouaddai", "Salamat", "Tandjile");
var continente46 = new Array('-', "Aisen del General Carlos Ibanez del Campo", "Antofagasta", "Araucania", "Atacama", "Bio-Bio", "Coquimbo", "Libertador General Bernardo OHiggins", "Los Lagos", "Magallanes y de la Antartica Chilena", "Maule", "Region Metropolitana", "Tarapaca", "Valparaiso");
var continente47 = new Array('-', "Anhui", "Beijing", "Chongqing", "Fujian", "Gansu", "Guangdong", "Guangxi", "Guizhou", "Hainan", "Hebei", "Heilongjiang", "Henan", "Hubei", "Hunan", "Jiangsu", "Jiangxi", "Jilin", "Liaoning", "Nei Mongol", "Ningxia", "Qinghai", "Shaanxi", "Shandong", "Shanghai", "Shanxi", "Sichuan", "Tianjin", "Xinjiang", "Xizang", "Yunnan", "Zhejiang");
var continente48 = new Array('-', "Famagusta", "Kyrenia", "Larnaca", "Limassol", "Nicosia", "Paphos");
var continente49 = new Array('-', "Amazonas", "Antioquia", "Arauca", "Atlantico", "Bolivar", "Bolívar Department", "Boyaca", "Boyacá Department", "Caldas", "Caldas Department", "Caqueta", "Casanare", "Cauca", "Cesar", "Choco", "Cordoba", "Cundinamarca", "Distrito Especial", "Guainia", "Guaviare", "Huila", "La Guajira", "Magdalena", "Magdalena Department", "Meta", "Narino", "Norte de Santander", "Putumayo", "Quindio", "Risaralda", "San Andres y Providencia", "Santander", "Sucre", "Tolima", "Valle del Cauca", "Vaupes", "Vichada");
var continente50 = new Array('-', "Anjouan", "Grande Comore", "Moheli");
var continente51 = new Array('-', "Bouenza", "Brazzaville", "Cuvette", "Kouilou", "Lekoumou", "Likouala", "Niari", "Plateaux", "Pool", "Sangha");
var continente52 = new Array('-', "Chagang-do", "Hamgyong-bukto", "Hamgyong-namdo", "Hwanghae-bukto", "Hwanghae-namdo", "Kaesong-si", "Kangwon-do", "Najin Sonbong-si", "Nampo-si", "P yongan-bukto", "P yongan-namdo", "P yongyang-si", "Yanggang-do");
var continente53 = new Array('-', "Ch ungch ong-bukto", "Ch ungch ong-namdo", "Cheju-do", "Cholla-bukto", "Cholla-namdo", "Inch on-jikhalsi", "Kangwon-do", "Kwangju-jikhalsi", "Kyonggi-do", "Kyongsang-bukto", "Kyongsang-namdo", "Pusan-jikhalsi", "Seoul-tukpyolsi", "Taegu-jikhalsi", "Taejon-jikhalsi", "Ulsan-gwangyoksi");
var continente54 = new Array('-', "Alajuela", "Cartago", "Guanacaste", "Heredia", "Limon", "Puntarenas", "San Jose");
var continente55 = new Array('-', "Abengourou", "Abidjan", "Aboisso", "Adiake", "Adzope", "Agboville", "Alepe", "Bangolo", "Beoumi", "Biankouma", "Bocanda", "Bondoukou", "Bongouanou", "Bouafle", "Bouake", "Bouna", "Boundiali", "Dabakala", "Dabou", "Daloa", "Danane", "Daoukro", "Dimbokro", "Divo", "Duekoue", "Ferkessedougou", "Gagnoa", "Grand-Bassam", "Grand-Lahou", "Guiglo", "Haut-Sassandra Region", "Issia", "Jacqueville", "Katiola", "Korhogo", "Lagunes Region", "Lakota", "Man", "Mankono", "Mbahiakro", "Odienne", "Oume", "Sakassou", "San Pedro", "Sassandra", "Seguela", "Sinfra", "Soubre", "Tabou", "Tanda", "Tiassale", "Tiebissou", "Tingrela", "Touba", "Toulepleu", "Toumodi", "Vavoua", "Yamoussoukro", "Zuenoula");
var continente56 = new Array('-', "Bjelovarsko-Bilogorska", "Brodsko-Posavska", "Dubrovacko-Neretvanska", "Grad Zagreb", "Istarska", "Karlovacka", "Koprivnicko-Krizevacka", "Krapinsko-Zagorska", "Licko-Senjska", "Medimurska", "Osjecko-Baranjska", "Pozesko-Slavonska", "Primorsko-Goranska", "Sibensko-Kninska", "Sisacko-Moslavacka", "Splitsko-Dalmatinska", "Varazdinska", "Viroviticko-Podravska", "Vukovarsko-Srijemska", "Zadarska", "Zagrebacka");
var continente57 = new Array('-', "Camaguey", "Ciego de Avila", "Cienfuegos", "Ciudad de la Habana", "Granma", "Guantanamo", "Holguin", "Isla de la Juventud", "La Habana", "Las Tunas", "Matanzas", "Pinar del Rio", "Sancti Spiritus", "Santiago de Cuba", "Villa Clara");
var continente58 = new Array('-', "Arhus", "Bornholm", "Frederiksborg", "Fyn", "Kobenhavn", "Nordjylland", "Ribe", "Ringkobing", "Roskilde", "Sonderjylland", "Staden Kobenhavn", "Storstrom", "Vejle", "Vestsjalland", "Viborg");
var continente59 = new Array('-', "Dikhil", "Djibouti", "Obock", "Tadjoura");
var continente60 = new Array('-', "Saint Andrew", "Saint David", "Saint George", "Saint John", "Saint Joseph", "Saint Luke", "Saint Mark", "Saint Patrick", "Saint Paul", "Saint Peter");
var continente61 = new Array('-', "East Timor (General)");
var continente62 = new Array('-', "Azuay", "Bolivar", "Canar", "Carchi", "Chimborazo", "Cotopaxi", "El Oro", "Esmeraldas", "Galapagos", "Guayas", "Imbabura", "Loja", "Los Rios", "Manabi", "Morona-Santiago", "Napo", "Orellana", "Pastaza", "Pichincha", "Sucumbios", "Tungurahua", "Zamora-Chinchipe");
var continente63 = new Array('-', "Ad Daqahliyah", "Al Bahr al Ahmar", "Al Buhayrah", "Al Fayyum", "Al Gharbiyah", "Al Iskandariyah", "Al Isma iliyah", "Al Jizah", "Al Minufiyah", "Al Minya", "Al Qahirah", "Al Qalyubiyah", "Al Wadi al Jadid", "As Suways", "Ash Sharqiyah", "Aswan", "Asyut", "Bani Suwayf", "Bur Said", "Dumyat", "Janub Sina", "Kafr ash Shaykh", "Matruh", "Qina", "Shamal Sina", "Suhaj");
var continente64 = new Array('-', "Ahuachapan", "Cabanas", "Chalatenango", "Cuscatlan", "La Libertad", "La Paz", "La Union", "Morazan", "San Miguel", "San Salvador", "San Vicente", "Santa Ana", "Sonsonate", "Usulutan");
var continente65 = new Array('-', "Holy See (Vatican City State) (General)");
var continente66 = new Array('-', "Abu Dhabi", "Ajman", "Dubai", "Fujairah", "Ras Al Khaimah", "Sharjah", "Umm Al Quwain");
var continente67 = new Array('-', "Eritrea (General)");
var continente68 = new Array('-', "Banska Bystrica", "Bratislava", "Kosice", "Nitra", "Presov", "Trencin", "Trnava", "Zilina");
var continente69 = new Array('-', "Ajdovscina", "Beltinci", "Bled", "Bohinj", "Borovnica", "Bovec", "Brda", "Brezice", "Brezovica", "Celje", "Cerklje na Gorenjskem", "Cerknica", "Cerkno", "Crensovci", "Crna na Koroskem", "Crnomelj", "Divaca", "Dobrepolje", "Dobrova-Horjul-Polhov Gradec", "Dol pri Ljubljani", "Domzale", "Dornava", "Dravograd", "Duplek", "Gorenja Vas-Poljane", "Gorisnica", "Gornja Radgona", "Gornji Grad", "Gornji Petrovci", "Grosuplje", "Hrastnik", "Hrpelje-Kozina", "Idrija", "Ig", "Ilirska Bistrica", "Ivancna Gorica", "Izola-Isola", "Jesenice", "Jursinci", "Kamnik", "Kanal", "Kidricevo", "Kobarid", "Kobilje", "Kocevje", "Komen", "Koper-Capodistria", "Kozje", "Kranj", "Kranjska Gora", "Krsko", "Kungota", "Kuzma", "Lasko", "Lenart", "Litija", "Ljubljana", "Ljubno", "Ljutomer", "Logatec", "Loska Dolina", "Loski Potok", "Luce", "Lukovica", "Majsperk", "Maribor", "Medvode", "Menges", "Metlika", "Mezica", "Miren-Kostanjevica", "Mislinja", "Moravce", "Moravske Toplice", "Mozirje", "Murska Sobota", "Muta", "Naklo", "Nazarje", "Nova Gorica", "Novo Mesto", "Odranci", "Ormoz", "Osilnica", "Pesnica", "Piran", "Pivka", "Podcetrtek", "Postojna", "Preddvor", "Ptuj", "Puconci", "Racam", "Radece", "Radenci", "Radlje ob Dravi", "Radovljica", "Ribnica", "Rogaska Slatina", "Rogasovci", "Rogatec", "Ruse", "Semic", "Sencur", "Sentilj", "Sentjernej", "Sentjur pri Celju", "Sevnica", "Sezana", "Skocjan", "Skofja Loka", "Skofljica", "Slovenj Gradec", "Slovenska Bistrica", "Slovenske Konjice", "Smarje pri Jelsah", "Smartno ob Paki", "Sostanj", "Starse", "Store", "Sveti Jurij", "Tolmin", "Trbovlje", "Trebnje", "Trzic", "Turnisce", "Velenje", "Velike Lasce", "Videm", "Vipava", "Vitanje", "Vodice", "Vojnik", "Vrhnika", "Vuzenica", "Zagorje ob Savi", "Zalec", "Zavrc", "Zelezniki", "Ziri", "Zrece");
var continente70 = new Array('-', "Andalucia", "Aragon", "Asturias", "Canarias", "Cantabria", "Castilla y Leon", "Castilla-La Mancha", "Cataluna", "Comunidad Valenciana", "Extremadura", "Galicia", "Islas Baleares", "La Rioja", "Madrid", "Murcia", "Navarra", "Pais Vasco");
var continente71 = new Array('-', "Alabama", "Alaska", "American Samoa", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Federated States of Micronesia", "Florida", "Georgia", "Guam", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Marshall Islands", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Northern Mariana Islands", "Ohio", "Oklahoma", "Oregon", "Palau", "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virgin Islands", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
var continente72 = new Array('-', "Harjumaa", "Hiiumaa", "Ida-Virumaa", "Jarvamaa", "Jogevamaa", "Kohtla-Jarve", "Laane-Virumaa", "Laanemaa", "Narva", "Parnu", "Parnumaa", "Polvamaa", "Raplamaa", "Saaremaa", "Sillamae", "Tallinn", "Tartu", "Tartumaa", "Valgamaa", "Viljandimaa", "Vorumaa");
var continente73 = new Array('-', "Addis Abeba", "Adis Abeba", "Afar", "Afar", "Amara", "Amhara", "Benishangul", "Binshangul Gumuz", "Dire Dawa", "Gambela Hizboch", "Gambella", "Hareri Hizb", "Oromiya", "Somali", "Southern", "Sumale", "Tigray", "Tigray", "YeDebub Biheroch Bihereseboch na Hizboch");
var continente74 = new Array('-', "Central", "Eastern", "Northern", "Rotuma", "Western");
var continente75 = new Array('-', "Abra", "Agusan del Norte", "Agusan del Sur", "Aklan", "Albay", "Angeles", "Antique", "Aurora", "Bacolod", "Bago", "Baguio", "Bais", "Basilan", "Basilan City", "Bataan", "Batanes", "Batangas", "Batangas City", "Benguet", "Bohol", "Bukidnon", "Bulacan", "Butuan", "Cabanatuan", "Cadiz", "Cagayan", "Cagayan de Oro", "Calbayog", "Caloocan", "Camarines Norte", "Camarines Sur", "Camiguin", "Canlaon", "Capiz", "Catanduanes", "Cavite", "Cavite City", "Cebu", "Cebu City", "Cotabato", "Dagupan", "Danao", "Dapitan", "Davao", "Davao City", "Davao Oriental", "Davao del Sur", "Dipolog", "Dumaguete", "Eastern Samar", "General Santos", "Gingoog", "Ifugao", "Iligan", "Ilocos Norte", "Ilocos Sur", "Iloilo", "Iloilo City", "Iriga", "Isabela", "Kalinga-Apayao", "La Carlota", "La Union", "Laguna", "Lanao del Norte", "Lanao del Sur", "Laoag", "Lapu-Lapu", "Legaspi", "Leyte", "Lipa", "Lucena", "Maguindanao", "Mandaue", "Manila", "Marawi", "Marinduque", "Masbate", "Mindoro Occidental", "Mindoro Oriental", "Misamis Occidental", "Misamis Oriental", "Mountain", "Naga", "Negros Occidental", "Negros Oriental", "North Cotabato", "Northern Samar", "Nueva Ecija", "Nueva Vizcaya", "Olongapo", "Ormoc", "Oroquieta", "Ozamis", "Pagadian", "Palawan", "Palayan", "Pampanga", "Pangasinan", "Pasay", "Puerto Princesa", "Quezon", "Quezon City", "Quirino", "Rizal", "Romblon", "Roxas", "Samar", "San Carlos", "San Carlos", "San Jose", "San Pablo", "Silay", "Siquijor", "Sorsogon", "South Cotabato", "Southern Leyte", "Sultan Kudarat", "Sulu", "Surigao", "Surigao del Norte", "Surigao del Sur", "Tacloban", "Tagaytay", "Tagbilaran", "Tangub", "Tarlac", "Tawitawi", "Toledo", "Trece Martires", "Zambales", "Zamboanga", "Zamboanga del Norte", "Zamboanga del Sur");
var continente76 = new Array('-', "Eastern Finland", "Lapland", "Oulu", "Southern Finland", "Western Finland");
var continente77 = new Array('-', "Alsace", "Aquitaine", "Auvergne", "Basse-Normandie", "Bourgogne", "Bretagne", "Centre", "Champagne-Ardenne", "Corse", "Franche-Comte", "Haute-Normandie", "Ile-de-France", "Languedoc-Roussillon", "Limousin", "Lorraine", "Midi-Pyrenees", "Nord-Pas-de-Calais", "Pays de la Loire", "Picardie", "Poitou-Charentes", "Provence-Alpes-Cote d Azur", "Rhone-Alpes");
var continente78 = new Array('-', "Guyane Département");
var continente79 = new Array('-', "Polynésie Française Territoire");
var continente80 = new Array('-', "French Southern Territories (General)");
var continente81 = new Array('-', "Estuaire", "Haut-Ogooue", "Moyen-Ogooue", "Ngounie", "Nyanga", "Ogooue-Ivindo", "Ogooue-Lolo", "Ogooue-Maritime", "Woleu-Ntem");
var continente82 = new Array('-', "Banjul", "Lower River", "MacCarthy Island", "North Bank", "Upper River", "Western");
var continente83 = new Array('-', "Abashis Raioni", "Abkhazia", "Adigenis Raioni", "Ajaria", "Akhalgoris Raioni", "Akhalk alakis Raioni", "Akhalts ikhis Raioni", "Akhmetis Raioni", "Ambrolauris Raioni", "Aspindzis Raioni", "Baghdat is Raioni", "Bolnisis Raioni", "Borjomis Raioni", "Ch khorotsqus Raioni", "Ch okhatauris Raioni", "Chiat ura", "Dedop listsqaros Raioni", "Dmanisis Raioni", "Dushet is Raioni", "Gardabanis Raioni", "Gori", "Goris Raioni", "Gurjaanis Raioni", "Javis Raioni", "K arelis Raioni", "K ut aisi", "Kaspis Raioni", "Kharagaulis Raioni", "Khashuris Raioni", "Khobis Raioni", "Khonis Raioni", "Lagodekhis Raioni", "Lanch khut is Raioni", "Lentekhis Raioni", "Marneulis Raioni", "Martvilis Raioni", "Mestiis Raioni", "Mts khet is Raioni", "Ninotsmindis Raioni", "Onis Raioni", "Ozurget is Raioni", "P ot i", "Qazbegis Raioni", "Qvarlis Raioni", "Rust avi", "Sach kheris Raioni", "Sagarejos Raioni", "Samtrediis Raioni", "Senakis Raioni", "Sighnaghis Raioni", "T bilisi", "T elavis Raioni", "T erjolis Raioni", "T et ritsqaros Raioni", "T ianet is Raioni", "Tqibuli", "Ts ageris Raioni", "Tsalenjikhis Raioni", "Tsalkis Raioni", "Tsqaltubo", "Vanis Raioni", "Zestap onis Raioni", "Zugdidi", "Zugdidis Raioni");
var continente84 = new Array('-', "Ashanti", "Brong-Ahafo", "Central", "Eastern", "Greater Accra", "Northern", "Upper East", "Upper West", "Volta", "Western");
var continente85 = new Array('-', "Gibraltar (General)");
var continente86 = new Array('-', "Saint Andrew", "Saint David", "Saint George", "Saint John", "Saint Mark", "Saint Patrick");
var continente87 = new Array('-', "Aitolia kai Akarnania", "Akhaia", "Argolis", "Arkadhia", "Arta", "Attiki", "Dhodhekanisos", "Drama", "Evritania", "Evros", "Evvoia", "Florina", "Fokis", "Fthiotis", "Grevena", "Ilia", "Imathia", "Ioannina", "Iraklion", "Kardhitsa", "Kastoria", "Kavala", "Kefallinia", "Kerkira", "Khalkidhiki", "Khania", "Khios", "Kikladhes", "Kilkis", "Korinthia", "Kozani", "Lakonia", "Larisa", "Lasithi", "Lesvos", "Levkas", "Magnisia", "Messinia", "Pella", "Pieria", "Preveza", "Rethimni", "Rodhopi", "Samos", "Serrai", "Thesprotia", "Thessaloniki", "Trikala", "Voiotia", "Xanthi", "Zakinthos");
var continente88 = new Array('-', "Nordgronland", "Ostgronland", "Vestgronland");
var continente89 = new Array('-', "Guadeloupe Département");
var continente90 = new Array('-', "Guam (General)");
var continente91 = new Array('-', "Alta Verapaz", "Baja Verapaz", "Chimaltenango", "Chiquimula", "El Progreso", "Escuintla", "Guatemala", "Huehuetenango", "Izabal", "Jalapa", "Jutiapa", "Peten", "Quetzaltenango", "Quiche", "Retalhuleu", "Sacatepequez", "San Marcos", "Santa Rosa", "Solola", "Suchitepequez", "Totonicapan", "Zacapa");
var continente92 = new Array('-', "Beyla", "Boffa", "Boke", "Conakry", "Coyah", "Dabola", "Dalaba", "Dinguiraye", "Dubreka", "Faranah", "Forecariah", "Fria", "Gaoual", "Gueckedou", "Kankan", "Kerouane", "Kindia", "Kissidougou", "Koubia", "Koundara", "Kouroussa", "Labe", "Lelouma", "Lola", "Macenta", "Mali", "Mamou", "Mandiana", "Nzerekore", "Pita", "Siguiri", "Telimele", "Tougue", "Yomou");
var continente93 = new Array('-', "Annobon", "Bioko Norte", "Bioko Sur", "Centro Sur", "Kie-Ntem", "Litoral", "Wele-Nzas");
var continente94 = new Array('-', "Bafata", "Biombo", "Bissau", "Bolama", "Cacheu", "Gabu", "Oio", "Quinara", "Tombali");
var continente95 = new Array('-', "Barima-Waini", "Cuyuni-Mazaruni", "Demerara-Mahaica", "East Berbice-Corentyne", "Essequibo Islands-West Demerara", "Mahaica-Berbice", "Pomeroon-Supenaam", "Potaro-Siparuni", "Upper Demerara-Berbice", "Upper Takutu-Upper Essequibo");
var continente96 = new Array('-', "Artibonite", "Centre", "Grand Anse", "Nord", "Nord-Est", "Nord-Ouest", "Ouest", "Sud", "Sud-Est");
var continente97 = new Array('-', "Heard Island and McDonald Islands (General)");
var continente98 = new Array('-', "Drenthe", "Dronten", "Flevoland", "Friesland", "Gelderland", "Groningen", "Lelystad", "Limburg", "Noord-Brabant", "Noord-Holland", "Overijssel", "Overijssel", "Utrecht", "Zeeland", "Zuid-Holland", "Zuidelijke IJsselmeerpolders");
var continente99 = new Array('-', "Atlantida", "Choluteca", "Colon", "Comayagua", "Copan", "Cortes", "El Paraiso", "Francisco Morazan", "Gracias a Dios", "Intibuca", "Islas de la Bahia", "La Paz", "Lempira", "Ocotepeque", "Olancho", "Santa Barbara", "Valle", "Yoro");
var continente100 = new Array('-', "Hong Kong (General)");
var continente101 = new Array('-', "Bacs-Kiskun", "Baranya", "Bekes", "Bekescsaba", "Borsod-Abauj-Zemplen", "Budapest", "Csongrad", "Debrecen", "Dunaujvaros", "Eger", "Fejer", "Gyor", "Gyor-Moson-Sopron", "Hajdu-Bihar", "Heves", "Hodmezovasarhely", "Jasz-Nagykun-Szolnok", "Kaposvar", "Kecskemet", "Komarom-Esztergom", "Miskolc", "Nagykanizsa", "Nograd", "Nyiregyhaza", "Pecs", "Pest", "Somogy", "Sopron", "Szabolcs-Szatmar-Bereg", "Szeged", "Szekesfehervar", "Szolnok", "Szombathely", "Tatabanya", "Tolna", "Vas", "Veszprem", "Veszprem", "Zala", "Zalaegerszeg");
var continente102 = new Array('-', "Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");
var continente103 = new Array('-', "Aceh", "Bali", "Banten", "Bengkulu", "Gorontalo", "Jakarta Raya", "Jambi", "Jawa Barat", "Jawa Tengah", "Jawa Timur", "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", "Kalimantan Timur", "Kepulauan Bangka Belitung", "Lampung", "Maluku", "Maluku Province", "Maluku Utara", "Nusa Tenggara Barat", "Nusa Tenggara Timur", "Papua", "Riau", "Sulawesi Selatan", "Sulawesi Tengah", "Sulawesi Tenggara", "Sulawesi Utara", "Sumatera Barat", "Sumatera Selatan", "Sumatera Utara", "Yogyakarta");
var continente104 = new Array('-', "Al Anbar", "Al Basrah", "Al Muthanna", "Al Qadisiyah", "An Najaf", "Arbil", "As Sulaymaniyah", "At Tamim", "Babil", "Baghdad", "Dahuk", "Dhi Qar", "Diyala", "Karbala", "Maysan", "Ninawa", "Salah ad Din", "Wasit");
var continente105 = new Array('-', "Carlow", "Cavan", "Clare", "Cork", "Donegal", "Dublin", "Galway", "Kerry", "Kildare", "Kilkenny", "Laois", "Leitrim", "Limerick", "Longford", "Louth", "Mayo", "Meath", "Monaghan", "Offaly", "Roscommon", "Sligo", "Tipperary", "Waterford", "Westmeath", "Wexford", "Wicklow");
var continente106 = new Array('-', "Cocos (Keeling) Islands (General)");
var continente107 = new Array('-', "Christmas Island (General)");
var continente108 = new Array('-', "Akranes", "Akureyri", "Arnessysla", "Austur-Bardastrandarsysla", "Austur-Hunavatnssysla", "Austur-Skaftafellssysla", "Borgarfjardarsysla", "Dalasysla", "Eyjafjardarsysla", "Gullbringusysla", "Hafnarfjordur", "Husavik", "Isafjordur", "Keflavik", "Kjosarsysla", "Kopavogur", "Myrasysla", "Neskaupstadur", "Nordur-Isafjardarsysla", "Nordur-Mulasysla", "Nordur-Tingeyjarsysla", "Olafsfjordur", "Rangarvallasysla", "Reykjavik", "Saudarkrokur", "Seydisfjordur", "Siglufjordur", "Skagafjardarsysla", "Snafellsnes- og Hnappadalssysla", "Strandasysla", "Sudur-Mulasysla", "Sudur-Tingeyjarsysla", "Vestmannaeyjar", "Vestur-Bardastrandarsysla", "Vestur-Hunavatnssysla", "Vestur-Isafjardarsysla", "Vestur-Skaftafellssysla");
var continente109 = new Array('-', "Creek", "Eastern", "Midland", "South Town", "Spot Bay", "Stake Bay", "West End", "Western");
var continente110 = new Array('-', "Cook Islands (General)");
var continente111 = new Array('-', "Færøerne");
var continente112 = new Array('-', "Falkland Islands (Malvinas) (General)");
var continente113 = new Array('-', "Marshall Islands (General)");
var continente114 = new Array('-', "Agalega Islands", "Black River", "Cargados Carajos", "Flacq", "Grand Port", "Moka", "Pamplemousses", "Plaines Wilhems", "Port Louis", "Riviere du Rempart", "Rodrigues", "Savanne");
var continente115 = new Array('-', "Central", "Guadalcanal", "Isabel", "Makira", "Malaita", "Temotu", "Western");
var continente116 = new Array('-', "South Georgia and the South Sandwich Islands (General)");
var continente117 = new Array('-', "Turks and Caicos Islands (General)");
var continente118 = new Array('-', "Wallis and Futuna (General)");
var continente119 = new Array('-', "HaDarom", "HaMerkaz", "HaZafon", "Hefa", "Tel Aviv", "Yerushalayim");
var continente120 = new Array('-', "Abruzzi", "Basilicata", "Calabria", "Campania", "Emilia-Romagna", "Friuli-Venezia Giulia", "Italy (General)", "Lazio", "Liguria", "Lombardia", "Marche", "Molise", "Piemonte", "Puglia", "Sardegna", "Sicilia", "Toscana", "Trentino-Alto Adige", "Umbria", "Valle d Aosta", "Veneto");
var continente121 = new Array('-', "Clarendon", "Hanover", "Kingston", "Manchester", "Portland", "Saint Andrew", "Saint Ann", "Saint Catherine", "Saint Elizabeth", "Saint James", "Saint Mary", "Saint Thomas", "Trelawny", "Westmoreland");
var continente122 = new Array('-', "Aichi", "Akita", "Aomori", "Chiba", "Ehime", "Fukui", "Fukuoka", "Fukushima", "Gifu", "Gumma", "Hiroshima", "Hokkaido", "Hyogo", "Ibaraki", "Ishikawa", "Iwate", "Kagawa", "Kagoshima", "Kanagawa", "Kochi", "Kumamoto", "Kyoto", "Mie", "Miyagi", "Miyazaki", "Nagano", "Nagasaki", "Nara", "Niigata", "Oita", "Okayama", "Okinawa", "Osaka", "Saga", "Saitama", "Shiga", "Shimane", "Shizuoka", "Tochigi", "Tokushima", "Tokyo", "Tottori", "Toyama", "Wakayama", "Yamagata", "Yamaguchi", "Yamanashi");
var continente123 = new Array('-', "Al Balqa", "Al Karak", "Al Mafraq", "Amman", "At Tafilah", "Az Zarqa", "Irbid", "Ma");
var continente124 = new Array('-', "Almaty", "Almaty City", "Aqmola", "", "Astana City", "Atyrau", "Bayqonyr", "East Kazakhstan", "Mangghystau", "North Kazakhstan", "Pavlodar", "Qaraghandy", "Qostanay", "Qyzylorda", "South Kazakhstan", "West Kazakhstan", "Zhambyl");
var continente125 = new Array('-', "Central", "Coast", "Eastern", "Nairobi Area", "North-Eastern", "Nyanza", "Rift Valley", "Western");
var continente126 = new Array('-', "Gilbert Islands", "Line Islands", "Phoenix Islands");
var continente127 = new Array('-', "Al Ahmadi", "Al Jahra", "Al Kuwayt", "Hawalli");
var continente128 = new Array('-', "Batken", "Bishkek", "Chuy", "Jalal-Abad", "Naryn", "Osh", "Osh", "Talas", "Ysyk-Kol");
var continente129 = new Array('-', "Attapu", "Champasak", "Houaphan", "Khammouan", "Louang Namtha", "Louangphrabang", "Oudomxai", "Phongsali", "Saravan", "Savannakhet", "Vientiane", "Xaignabouri", "Xiangkhoang");
var continente130 = new Array('-', "Aizkraukles", "Aluksnes", "Balvu", "Bauskas", "Daugavpils", "Daugavpils", "Dobeles", "Gulbenes", "Jelgava", "Jelgavas", "Jurmala", "Kuldigas", "Limbazu", "Ludzas", "Madonas", "Ogres", "Preilu", "Riga", "Rigas", "Saldus", "Talsu", "Tukuma", "Valkas", "Valmieras", "Ventspils", "Ventspils");
var continente131 = new Array('-', "Berea", "Butha-Buthe", "Leribe", "Mafeteng", "Maseru", "Mohales Hoek", "Mokhotlong", "Qachas Nek", "Quthing", "Thaba-Tseka");
var continente132 = new Array('-', "Bong", "Grand Bassa", "Grand Cape Mount", "Grand Jide", "Lofa", "Maryland", "Monrovia", "Montserrado", "Nimba", "Sino");
var continente133 = new Array('-', "Ajdabiya", "Al", "Al Fatih", "Al Jabal al Akhdar", "Al Jufrah", "Al Khums", "Al Kufrah", "An Nuqat al Khams", "Ash Shati", "Awbari", "Az Zawiyah", "Banghazi", "Darnah", "Ghadamis", "Gharyan", "Misratah", "Murzuq", "Sabha", "Sawfajjin", "Surt", "Tarabulus", "Tarhunah", "Tubruq", "Yafran", "Zlitan");
var continente134 = new Array('-', "Balzers", "Eschen", "Gamprin", "Mauren", "Planken", "Ruggell", "Schaan", "Schellenberg", "Triesen", "Triesenberg", "Vaduz");
var continente135 = new Array('-', "Alytaus Apskritis", "Kauno Apskritis", "Klaipedos Apskritis", "Marijampoles Apskritis", "Panevezio Apskritis", "Siauliu Apskritis", "Taurages Apskritis", "Telsiu Apskritis", "Utenos Apskritis", "Vilniaus Apskritis");
var continente136 = new Array('-', "Diekirch", "Grevenmacher", "Luxembourg");
var continente137 = new Array('-', "Beqaa", "Beyrouth", "Liban-Nord", "Liban-Sud", "Mont-Liban", "Nabatiye");
var continente138 = new Array('-', "Ilhas", "Macau");
var continente139 = new Array('-', "Aracinovo", "Bac", "Belcista", "Berovo", "Bistrica", "Bitola", "Blatec", "Bogdanci", "Bogomila", "Bogovinje", "Bosilovo", "Brvenica", "Cair", "Capari", "Caska", "Cegrane", "Centar", "Centar Zupa", "Cesinovo", "Cucer-Sandevo", "Debar", "Delcevo", "Delogozdi", "Demir Hisar", "Demir Kapija", "Dobrusevo", "Dolna Banjica", "Dolneni", "Dorce Petrov", "Drugovo", "Dzepciste", "Gazi Baba", "Gevgelija", "Gostivar", "Gradsko", "Ilinden", "Izvor", "Jegunovce", "Kamenjane", "Karbinci", "Karpos", "Kavadarci", "Kicevo", "Kisela Voda", "Klecevce", "Kocani", "Konce", "Kondovo", "Konopiste", "Kosel", "Kratovo", "Kriva Palanka", "Krivogastani", "Krusevo", "Kuklis", "Kukurecani", "Kumanovo", "Labunista", "Lipkovo", "Lozovo", "Lukovo", "Makedonska Kamenica", "Makedonski Brod", "Mavrovi Anovi", "Meseista", "Miravci", "Mogila", "Murtino", "Negotino", "Negotino-Polosko", "Novaci", "Novo Selo", "Oblesevo", "Ohrid", "Orasac", "Orizari", "Oslomej", "Pehcevo", "Petrovec", "Plasnica", "Podares", "Prilep", "Probistip", "Radovis", "Rankovce", "Resen", "Rosoman", "Rostusa", "Samokov", "Saraj", "Sipkovica", "Sopiste", "Sopotnica", "Srbinovo", "Star Dojran", "Staravina", "Staro Nagoricane", "Stip", "Struga", "Strumica", "Studenicani", "Suto Orizari", "Sveti Nikole", "Tearce", "Tetovo", "Topolcani", "Valandovo", "Vasilevo", "Veles", "Velesta", "Vevcani", "Vinica", "Vitoliste", "Vranestica", "Vrapciste", "Vratnica", "Vrutok", "Zajas", "Zelenikovo", "Zelino", "Zitose", "Zletovo", "Zrnovci", "Ilhas", "Macau");
var continente140 = new Array('-', "Antananarivo", "Antsiranana", "Fianarantsoa", "Mahajanga", "Toamasina", "Toliara");
var continente141 = new Array('-', "Johor", "Kedah", "Kelantan", "Labuan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Selangor", "Terengganu", "Wilayah Persekutuan");
var continente142 = new Array('-', "Balaka", "Blantyre", "Chikwawa", "Chiradzulu", "Chitipa", "Dedza", "Dowa", "Karonga", "Kasungu", "Likoma", "Lilongwe", "Machinga", "Mangochi", "Mchinji", "Mulanje", "Mwanza", "Mzimba", "Nkhata Bay", "Nkhotakota", "Nsanje", "Ntcheu", "Ntchisi", "Phalombe", "Rumphi", "Salima", "Thyolo", "Zomba");
var continente143 = new Array('-', "Aliff", "Baa", "Daalu", "Faafu", "Gaafu Aliff", "Gaafu Daalu", "Haa Aliff", "Haa Daalu", "Kaafu", "Laamu", "Laviyani", "Male", "Meemu", "Naviyani", "Noonu", "Raa", "Seenu", "Shaviyani", "Thaa", "Waavu");
var continente144 = new Array('-', "Malta (General)");
var continente145 = new Array('-', "Bamako", "Gao", "Kayes", "Kidal", "Koulikoro", "Mopti", "Segou", "Sikasso", "Tombouctou");
var continente146 = new Array('-', "Agadir", "Al Hoceima", "Azilal", "Ben Slimane", "Beni Mellal", "Boulemane", "Casablanca", "Chaouen", "El Jadida", "El Kelaa des Srarhna", "Er Rachidia", "Essaouira", "Fes", "Figuig", "Guelmim", "Ifrane", "Kenitra", "Khemisset", "Khenifra", "Khouribga", "Laayoune", "Larache", "Marrakech", "Meknes", "Nador", "Ouarzazate", "Oujda", "Rabat-Sale", "Safi", "Settat", "Sidi Kacem", "Tan-Tan", "Tanger", "Taounate", "Taroudannt", "Tata", "Taza", "Tetouan", "Tiznit");
var continente147 = new Array('-', "Martinique Département");
var continente148 = new Array('-', "Adrar", "Assaba", "Brakna", "Dakhlet Nouadhibou", "Gorgol", "Guidimaka", "Hodh Ech Chargui", "Hodh El Gharbi", "Inchiri", "Tagant", "Tiris Zemmour", "Trarza");
var continente149 = new Array('-', "Mayotte (General)");
var continente150 = new Array('-', "Chuuk", "Kosrae", "Pohnpei", "Yap");
var continente151 = new Array('-', "Balti", "Cahul", "Chisinau", "Edinet", "Gagauzia", "Lapusna", "Orhei", "Soroca", "Stinga Nistrului", "Tighina", "Ungheni");
var continente152 = new Array('-', "Arhangay", "Bayan-Olgiy", "Bayanhongor", "Bulgan", "Darhan", "Darhan Uul", "Dornod", "Dornogovi", "Dundgovi", "Dzavhan", "Erdenet", "Govi-Altay", "Govi-Sumber", "Hentiy", "Hovd", "Hovsgol", "Omnogovi", "Orhon", "Ovorhangay", "Selenge", "Suhbaatar", "Tov", "Ulaanbaatar", "Uvs");
var continente153 = new Array('-', "Saint Anthony", "Saint Georges", "Saint Peter");
var continente154 = new Array('-', "Cabo Delgado", "Gaza", "Inhambane", "Manica", "Maputo", "Nampula", "Niassa", "Sofala", "Tete", "Zambezia");
var continente155 = new Array('-', "Chin State", "Irrawaddy", "Kachin State", "Karan State", "Kayah State", "Magwe", "Mandalay", "Mon State", "Pegu", "Rakhine State", "Rangoon", "Sagaing", "Shan State", "Tenasserim", "Yangon");
var continente156 = new Array('-', "Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila de Zaragoza", "Colima", "Distrito Federal", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "Mexico", "Michoacan de Ocampo", "Morelos", "Nayarit", "Nuevo Leon", "Oaxaca", "Puebla", "Queretaro de Arteaga", "Quintana Roo", "San Luis Potosi", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz-Llave", "Yucatan", "Zacatecas");
var continente157 = new Array('-', "La Condamine", "Monaco", "Monte-Carlo");
var continente158 = new Array('-', "Bethanien", "Boesmanland", "Caprivi", "Caprivi Oos", "Damaraland", "Erongo", "Gobabis", "Grootfontein", "Hardap", "Hereroland Oos", "Hereroland Wes", "Kaokoland", "Karas", "Karasburg", "Karibib", "Kavango", "Keetmanshoop", "Khomas Region", "Kunene", "Luderitz", "Maltahohe", "Mariental", "Namaland", "Ohangwena", "Okahandja", "Okavango", "Omaheke", "Omaruru", "Omusati", "Oshana", "Oshikoto", "Otjiwarongo", "Otjozondjupa", "Outjo", "Owambo", "Rehoboth", "Swakopmund", "Tsumeb", "Windhoek");
var continente159 = new Array('-', "Aiwo", "Anabar", "Anetan", "Anibare", "Baiti", "Boe", "Buada", "Denigomodu", "Ewa", "Ijuw", "Meneng", "Nibok", "Uaboe", "Yaren");
var continente160 = new Array('-', "Bagmati", "Bheri", "Bagmati Zone", "Dhawalagiri", "Gandaki", "Janakpur", "Karnali", "Kosi", "Lumbini", "Mahakali", "Mechi", "Narayani", "Rapti", "Sagarmatha", "Seti");
var continente161 = new Array('-', "Boaco", "Carazo", "Chinandega", "Chontales", "Esteli", "Granada", "Jinotega", "Leon", "Madriz", "Managua", "Masaya", "Matagalpa", "Nueva Segovia", "Rio San Juan", "Rivas", "Zelaya");
var continente162 = new Array('-', "Abia", "Abuja Capital Territory", "Adamawa", "Akwa Ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nassarawa", "Niger", "Ogun", "Ondo", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara");
var continente163 = new Array('-', "Niue (General)");
var continente164 = new Array('-', "Norfolk Island (General)");
var continente165 = new Array('-', "Northern Mariana Islands (General)");
var continente166 = new Array('-', "Akershus", "Aust-Agder", "Buskerud", "Finnmark", "Hedmark", "Hordaland", "More og Romsdal", "Nord-Trondelag", "Nordland", "Oppland", "Oslo", "Ostfold", "Rogaland", "Sogn og Fjordane", "Sor-Trondelag", "Telemark", "Troms", "Vest-Agder", "Vestfold");
var continente167 = new Array('-', "Nouvelle-Calédonie");
var continente168 = new Array('-', "Akaroa", "Amuri", "Ashburton", "Bay of Islands", "Bruce", "Buller", "Chatham Islands", "Cheviot", "Clifton", "Clutha", "Cook", "Dannevirke", "Egmont", "Eketahuna", "Ellesmere", "Eltham", "Eyre", "Featherston", "Franklin", "Golden Bay", "Great Barrier Island", "Grey", "Hauraki Plains", "Hawera", "Hawkes Bay", "Heathcote", "Hikurangi", "Hobson", "Hokianga", "Horowhenua", "Hurunui", "Hutt", "Inangahua", "Inglewood", "Kaikoura", "Kairanga", "Kiwitea", "Lake", "Mackenzie", "Malvern", "Manaia", "Manawatu", "Mangonui", "Maniototo", "Marlborough", "Masterton", "Matamata", "Mount Herbert", "Ohinemuri", "Opotiki", "Oroua", "Otamatea", "Otorohanga", "Oxford", "Pahiatua", "Paparua", "Patea", "Piako", "Pohangina", "Raglan", "Rangiora", "Rangitikei", "Rodney", "Rotorua", "Runanga", "Saint Kilda", "Silverpeaks", "Southland", "Stewart Island", "Stratford", "Strathallan", "Taranaki", "Taumarunui", "Taupo", "Tauranga", "Thames-Coromandel", "Tuapeka", "Vincent", "Waiapu", "Waiheke", "Waihemo", "Waikato", "Waikohu", "Waimairi", "Waimarino", "Waimate", "Waimate West", "Waimea", "Waipa", "Waipawa", "Waipukurau", "Wairarapa South", "Wairewa", "Wairoa", "Waitaki", "Waitomo", "Waitotara", "Wallace", "Wanganui", "Waverley", "Westland", "Whakatane", "Whangarei", "Whangaroa", "Woodville");
var continente169 = new Array('-', "Agadez", "Diffa", "Dosso", "Maradi", "Niamey", "Tahoua", "Zinder");
var continente170 = new Array('-', "Ad Dakhiliyah", "Al Batinah", "Al Wusta", "Ash Sharqiyah", "Az Zahirah", "Masqat", "Musandam", "Zufar");
var continente171 = new Array('-', "Azad Kashmir", "Balochistan", "Federally Administered Tribal Areas", "Islamabad", "North-West Frontier", "Northern Areas", "Punjab", "Sindh");
var continente172 = new Array('-', "Palau (General)");
var continente173 = new Array('-', "Palestinian Territory (General)");
var continente174 = new Array('-', "Bocas del Toro", "Chiriqui", "Cocle", "Colon", "Darien", "Herrera", "Los Santos", "Panama", "San Blas", "Veraguas");
var continente175 = new Array('-', "Central", "Chimbu", "East New Britain", "East Sepik", "Eastern Highlands", "Enga", "Gulf", "Madang", "Manus", "Milne Bay", "Morobe", "National Capital", "New Ireland", "North Solomons", "Northern", "Sandaun", "Southern Highlands", "West New Britain", "Western", "Western Highlands");
var continente176 = new Array('-', "Alto Paraguay", "Alto Parana", "Amambay", "Boqueron", "Caaguazu", "Caazapa", "Canindeyu", "Central", "Chaco", "Concepcion", "Cordillera", "Guaira", "Itapua", "Misiones", "Neembucu", "Nueva Asuncion", "Paraguari", "Presidente Hayes", "San Pedro");
var continente177 = new Array('-', "Amazonas", "Ancash", "Apurimac", "Arequipa", "Ayacucho", "Cajamarca", "Callao", "Cusco", "Huancavelica", "Huanuco", "Ica", "Junin", "La Libertad", "Lambayeque", "Lima", "Loreto", "Madre de Dios", "Moquegua", "Pasco", "Piura", "Puno", "San Martin", "Tacna", "Tumbes", "Ucayali");
var continente178 = new Array('-', "Pitcairn (General)");
var continente179 = new Array('-', "Biala Podlaska", "Bialystok", "Bielsko", "Bydgoszcz", "Chelm", "Ciechanow", "Czestochowa", "Dolnoslaskie", "Elblag", "Gdansk", "Gorzow", "Jelenia Gora", "Kalisz", "Katowice", "Kielce", "Konin", "Koszalin", "Krakow", "Krosno", "Kujawsko-Pomorskie", "Legnica", "Leszno", "Lodz", "Lodzkie", "Lomza", "Lubelskie", "Lublin", "Lubuskie", "Malopolskie", "Mazowieckie", "Nowy Sacz", "Olsztyn", "Opole", "Opolskie", "Ostroleka", "Pila", "Piotrkow", "Plock", "Podkarpackie", "Podlaskie", "Pomorskie", "Poznan", "Przemysl", "Radom", "Rzeszow", "Siedlce", "Sieradz", "Skierniewice", "Slaskie", "Slupsk", "Suwalki", "Swietokrzyskie", "Szczecin", "Tarnobrzeg", "Tarnow", "Torun", "Walbrzych", "Warminsko-Mazurskie", "Warszawa", "Wielkopolskie", "Wloclawek", "Wroclaw", "Zachodniopomorskie", "Zamosc", "Zielona Gora");
var continente180 = new Array('-', "Aveiro", "Azores", "Beja", "Braga", "Braganca", "Castelo Branco", "Coimbra", "Evora", "Faro", "Guarda", "Leiria", "Lisboa", "Madeira", "Portalegre", "Porto", "Santarem", "Setubal", "Viana do Castelo", "Vila Real", "Viseu");
var continente181 = new Array('-', "Puerto Rico (General)");
var continente182 = new Array('-', "Ad Dawhah", "Al Ghuwariyah", "Al Jumaliyah", "Al Khawr", "Al Wakrah", "Al Wakrah Municipality", "Ar Rayyan", "Jariyan al Batnah", "Madinat ach Shamal", "Umm Said", "Umm Salal");
var continente183 = new Array('-', "Aberdeen City", "Aberdeenshire", "Angus", "Antrim", "Ards", "Argyll and Bute", "Armagh", "Avon", "Ballymena", "Ballymoney", "Banbridge", "Barking and Dagenham", "Barnet", "Barnsley", "Bath and North East Somerset", "Bedfordshire", "Belfast", "Berkshire", "Bexley", "Birmingham", "Blackburn with Darwen", "Blackpool", "Blaenau Gwent", "Bolton", "Bournemouth", "Bracknell Forest", "Bradford", "Brent", "Bridgend", "Brighton and Hove", "Bristol, City of", "Bromley", "Buckinghamshire", "Bury", "Caerphilly", "Calderdale", "Cambridgeshire", "Camden", "Cardiff", "Carmarthenshire", "Carrickfergus", "Castlereagh", "Central", "Ceredigion", "Cheshire", "Clackmannanshire", "Cleveland", "Clwyd", "Coleraine", "Conwy", "Cookstown", "Cornwall", "Coventry", "Craigavon", "Croydon", "Cumbria", "Darlington", "Denbighshire", "Derby", "Derbyshire", "Derry", "Devon", "Doncaster", "Dorset", "Down", "Dudley", "Dumfries and Galloway", "Dundee City", "Dungannon", "Durham", "Dyfed", "Ealing", "East Ayrshire", "East Dunbartonshire", "East Lothian", "East Renfrewshire", "East Riding of Yorkshire", "East Sussex", "Edinburgh, City of", "Eilean Siar", "Enfield", "Essex", "Falkirk", "Fermanagh", "Fife", "Flintshire", "Gateshead", "Glasgow City", "Gloucestershire", "Grampian", "Greater London", "Greater Manchester", "Greenwich", "Gwent", "Gwynedd", "Hackney", "Halton", "Hammersmith and Fulham", "Hampshire", "Haringey", "Harrow", "Hartlepool", "Havering", "Hereford and Worcester", "Herefordshire", "Hertford", "Highland", "Hillingdon", "Hounslow", "Humberside", "Inverclyde", "Isle of Anglesey", "Isle of Wight", "Islington", "Kensington and Chelsea", "Kent", "Kingston upon Hull, City of", "Kingston upon Thames", "Kirklees", "Knowsley", "Lambeth", "Lancashire", "Larne", "Leeds", "Leicester", "Leicestershire", "Lewisham", "Limavady", "Lincolnshire", "Lisburn", "Liverpool", "London, City of", "Lothian", "Luton", "Magherafelt", "Manchester", "Medway", "Merseyside", "Merthyr Tydfil", "Merton", "Mid Glamorgan", "Middlesbrough", "Midlothian", "Milton Keynes", "Monmouthshire", "Moray", "Moyle", "Neath Port Talbot", "Newcastle upon Tyne", "Newham", "Newport", "Newry and Mourne", "Newtownabbey", "Norfolk", "North Ayrshire", "North Down", "North East Lincolnshire", "North Lanarkshire", "North Lincolnshire", "North Somerset", "North Tyneside", "North Yorkshire", "Northamptonshire", "Northumberland", "Nottingham", "Nottinghamshire", "Oldham", "Omagh", "Orkney", "Oxfordshire", "Pembrokeshire", "Perth and Kinross", "Peterborough", "Plymouth", "Poole", "Portsmouth", "Powys", "Reading", "Redbridge", "Redcar and Cleveland", "Renfrewshire", "Rhondda Cynon Taff", "Richmond upon Thames", "Rochdale", "Rotherham", "Rutland", "Salford", "Sandwell", "Scottish Borders", "The Sefton", "Sheffield", "Shetland Islands", "Shropshire", "Slough", "Solihull", "Somerset", "South Ayrshire", "South Glamorgan", "South Gloucestershire", "South Lanarkshire", "South Tyneside", "South Yorkshire", "Southampton", "Southend-on-Sea", "Southwark", "St. Helens", "Staffordshire", "Stirling", "Stockport", "Stockton-on-Tees", "Stoke-on-Trent", "Strabane", "Strathclyde", "Suffolk", "Sunderland", "Surrey", "Sutton", "Swansea", "Swindon", "Tameside", "Tayside", "Telford and Wrekin", "Thurrock", "Torbay", "Torfaen", "Tower Hamlets", "Trafford", "Tyne and Wear", "Vale of Glamorgan, The", "Wakefield", "Walsall", "Waltham Forest", "Wandsworth", "Warrington", "Warwickshire", "West Berkshire", "West Dunbartonshire", "West Glamorgan", "West Lothian", "West Midlands", "West Sussex", "West Yorkshire", "Westminster", "Wigan", "Wiltshire", "Windsor and Maidenhead", "Wirral", "Wokingham", "Wolverhampton", "Worcestershire", "Wrexham", "York");
var continente184 = new Array('-', "Bamingui-Bangoran", "Bangui", "Basse-Kotto", "Haut-Mbomou", "Haute-Kotto", "Kemo", "Lobaye", "Mambere-Kadei", "Mbomou", "Nana-Grebizi", "Nana-Mambere", "Ombella-Mpoko", "Ouaka", "Ouham", "Ouham-Pende", "Sangha-Mbaere", "Vakaga");
var continente185 = new Array('-', "Blansko", "Breclav", "Hlavni Mesto Praha", "Hradec Kralove", "Jablonec nad Nisou", "Jiein", "Jihlava", "Jihocesky Kraj", "Jihomoravsky Kraj", "Karlovarsky Kraj", "Kolin", "Kralovehradecky Kraj", "Liberec", "Liberecky Kraj", "Melnik", "Mlada Boleslav", "Moravskoslezsky Kraj", "Nachod", "Nymburk", "Olomoucky Kraj", "Pardubice", "Pardubicky Kraj", "Plzensky Kraj", "Semily", "Stredocesky Kraj", "Trutnov", "Ustecky Kraj", "Vysocina", "Zlinsky Kraj");
var continente186 = new Array('-', "Congo, The Democratic Republic of the (General)");
var continente187 = new Array('-', "Azua", "Baoruco", "Barahona", "Dajabon", "Distrito Nacional", "Duarte", "El Seibo", "Elias Pina", "Espaillat", "Hato Mayor", "Independencia", "La Altagracia", "La Romana", "La Vega", "Maria Trinidad Sanchez", "Monsenor Nouel", "Monte Cristi", "Monte Plata", "Pedernales", "Peravia", "Puerto Plata", "Salcedo", "Samana", "San Cristobal", "San Juan", "San Pedro De Macoris", "Sanchez Ramirez", "Santiago", "Santiago Rodriguez", "Valverde");
var continente188 = new Array('-', "Ardabil", "Azarbayjan-e Bakhtari", "Azarbayjan-e Khavari", "Bakhtaran", "Bushehr", "Chahar Mahall va Bakhtiari", "East Azarbaijan", "Esfahan", "Fars", "Gilan", "Golestan", "Hamadan", "Hormozgan", "Ilam", "Kerman", "Khorasan", "Khuzestan", "Kohkiluyeh va Buyer Ahmadi", "Kordestan", "Lorestan", "Markazi", "Markazi", "Mazandaran", "Mazandaran", "Qazvin", "Qom", "Semnan", "Sistan va Baluchestan", "Tehran", "Yazd", "Zanjan", "Zanjan");
var continente189 = new Array('-', "Butare", "Byumba", "Cyangugu", "Gikongoro", "Gisenyi", "Gitarama", "Kibungo", "Kibuye", "Kigali", "Ruhengeri");
var continente190 = new Array('-', "Alba", "Arad", "Arges", "Bacau", "Bihor", "Bistrita-Nasaud", "Botosani", "Braila", "Brasov", "Bucuresti", "Buzau", "Calarasi", "Caras-Severin", "Cluj", "Constanta", "Covasna", "Dambovita", "Dolj", "Galati", "Giurgiu", "Gorj", "Harghita", "Hunedoara", "Ialomita", "Iasi", "Ilfov", "Maramures", "Mehedinti", "Mures", "Neamt", "Olt", "Prahova", "Salaj", "Satu Mare", "Sibiu", "Suceava", "Teleorman", "Timis", "Tulcea", "Valcea", "Vaslui", "Vrancea");
var continente191 = new Array('-', "Adygeya, Republic of", "Aginsky Buryatsky AO", "Altaisky krai", "Amur", "Arkhangel sk", "Astrakhan", "Bashkortostan", "Belgorod", "Bryansk", "Buryat", "Chechnya", "Chechnya Republic", "Chelyabinsk", "Chita", "Chukot", "Chuvashia", "Dagestan", "Evenk", "Gorno-Altay", "Ingush", "Irkutsk", "Ivanovo", "JA", "Kabardin-Balkar", "Kaliningrad", "Kalmyk", "Kaluga", "Kamchatka", "Karachay-Cherkess", "Karelia", "Kemerovo", "Khabarovsk", "Khakass", "Khanty-Mansiy", "Kirov", "Komi", "Komi-Permyak", "Koryak", "Kostroma", "Krasnodar", "Krasnoyarsk", "Kurgan", "Kursk", "Leningrad", "Lipetsk", "Magadan", "Mariy-El", "Mordovia", "Moscow City", "Moskva", "Murmansk", "Nenets", "Nizhegorod", "North Ossetia", "Novgorod", "Novosibirsk", "Omsk", "Orel", "Orenburg", "Penza", "Perm", "Primor ye", "Pskov", "Rostov", "Ryazan", "Saint Petersburg City", "Sakha", "Sakhalin", "Samara", "Saratov", "Smolensk", "Stavropol", "Sverdlovsk", "Tambovskaya oblast", "Tatarstan", "Taymyr", "Tomsk", "Tula", "Tuva", "Tver", "Tyumen", "Udmurt", "Ul yanovsk", "Ust-Orda Buryat", "Vladimir", "Volgograd", "Vologda", "Voronezh", "Yamal-Nenets", "Yaroslavl", "Yevrey");
var continente192 = new Array('-', "Christ Church Nichola Town", "Saint Anne Sandy Point", "Saint George Basseterre", "Saint George Gingerland", "Saint James Windward", "Saint John Capisterre", "Saint John Figtree", "Saint Mary Cayon", "Saint Paul Capisterre", "Saint Paul Charlestown", "Saint Peter Basseterre", "Saint Thomas Lowland", "Saint Thomas Middle Island", "Trinity Palmetto Point");
var continente193 = new Array('-', "Saint-Pierre et Miquelon Collectivité Territoriale");
var continente194 = new Array('-', "Aiga-i-le-Tai", "Atua", "Fa", "Gaga", "Gagaifomauga", "Palauli", "Satupa", "Tuamasaga", "Va", "Vaisigano");
var continente195 = new Array('-', "Acquaviva", "Borgo Maggiore", "Chiesanuova", "Domagnano", "Faetano", "Fiorentino", "Monte Giardino", "San Marino", "Serravalle");
var continente196 = new Array('-', "Charlotte", "Grenadines", "Saint Andrew", "Saint David", "Saint George", "Saint Patrick");
var continente197 = new Array('-', "Ascension", "Saint Helena", "Tristan da Cunha");
var continente198 = new Array('-', "Anse-la-Raye", "Castries", "Choiseul", "Dauphin", "Dennery", "Gros-Islet", "Laborie", "Micoud", "Praslin", "Soufriere", "Vieux-Fort");
var continente199 = new Array('-', "Principe", "Sao Tome");
var continente200 = new Array('-', "Dakar", "Diourbel", "Fatick", "Kaolack", "Kolda", "Louga", "Saint-Louis", "Saint-Louis Region", "Tambacounda", "Thies", "Ziguinchor");
var continente201 = new Array('-', "Kosovo", "Vojvodina");
var continente202 = new Array('-', "Anse Boileau", "Anse Etoile", "Anse Louis", "Anse Royale", "Anse aux Pins", "Baie Lazare", "Baie Sainte Anne", "Beau Vallon", "Bel Air", "Bel Ombre", "Cascade", "Glacis", "Grand Anse", "Grand Anse", "La Digue", "La Riviere Anglaise", "Mont Buxton", "Mont Fleuri", "Plaisance", "Pointe La Rue", "Port Glaud", "Saint Louis", "Takamaka");
var continente203 = new Array('-', "Eastern", "Northern", "Southern", "Western Area");
var continente204 = new Array('-', "Singapore (General)");
var continente205 = new Array('-', "Al Hasakah", "Al Ladhiqiyah", "Al Qunaytirah", "Ar Raqqah", "As Suwayda", "Dar", "Dayr az Zawr", "Dimashq", "Halab", "Hamah", "Hims", "Idlib", "Rif Dimashq", "Tartus");
var continente206 = new Array('-', "Bakool", "Banaadir", "Bari", "Bay", "Galguduud", "Gedo", "Hiiraan", "Jubbada Dhexe", "Jubbada Hoose", "Mudug", "Nugaal", "Sanaag", "Shabeellaha Dhexe", "Shabeellaha Hoose", "Togdheer", "Woqooyi Galbeed");
var continente207 = new Array('-', "Amparai", "Anuradhapura", "Badulla", "Batticaloa", "Central Province", "Colombo", "Galle", "Gampaha", "Hambantota", "Jaffna", "Kalutara", "Kandy", "Kegalla", "Kurunegala", "Mannar", "Matale", "Matara", "Moneragala", "Mullaittivu", "North Central Province", "North Eastern Province", "North Western Province", "Nuwara Eliya", "Polonnaruwa", "Puttalam", "Ratnapura", "Sabaragamuwa Province", "Southern Province", "Trincomalee", "Uva Province", "Vavuniya", "Western Province");
var continente208 = new Array('-', "Hhohho", "Lubombo", "Manzini", "Praslin", "Shiselweni");
var continente209 = new Array('-', "Eastern Cape", "Free State", "Gauteng", "KwaZulu-Natal", "Limpopo", "Mpumalanga", "North-West", "Northern Cape", "Western Cape");
var continente210 = new Array('-', "Al Istiwaiyah", "Al Khartum", "Al Wusta", "Ash Shamaliyah", "Ash Sharqiyah", "Bahr al Ghazal", "Darfur", "Kurdufan");
var continente211 = new Array('-', "Alvsborgs Lan", "Blekinge Lan", "Dalarnas Lan", "Gavleborgs Lan", "Goteborgs och Bohus Lan", "Gotlands Lan", "Hallands Lan", "Jamtlands Lan", "Jonkopings Lan", "Kalmar Lan", "Kristianstads Lan", "Kronobergs Lan", "Malmohus Lan", "Norrbottens Lan", "Orebro Lan", "Ostergotlands Lan", "Skane Lan", "Skaraborgs Lan", "Sodermanlands Lan", "Stockholms Lan", "Uppsala Lan", "Varmlands Lan", "Vasterbottens Lan", "Vasternorrlands Lan", "Vastmanlands Lan", "Vastra Gotaland");
var continente212 = new Array('-', "Aargau", "Ausser-Rhoden", "Basel-Landschaft", "Basel-Stadt", "Bern", "Fribourg", "Geneve", "Glarus", "Graubunden", "Inner-Rhoden", "Jura", "Luzern", "Neuchatel", "Nidwalden", "Obwalden", "Sankt Gallen", "Schaffhausen", "Schwyz", "Solothurn", "Thurgau", "Ticino", "Uri", "Valais", "Vaud", "Zug", "Zurich");
var continente213 = new Array('-', "Brokopondo", "Commewijne", "Coronie", "Marowijne", "Nickerie", "Para", "Paramaribo", "Saramacca", "Sipaliwini", "Wanica");
var continente214 = new Array('-', "Svalbard and Jan Mayen (General)");
var continente215 = new Array('-', "Ang Thong", "Buriram", "Chachoengsao", "Chai Nat", "Chaiyaphum", "Chanthaburi", "Chiang Mai", "Chiang Rai", "Chon Buri", "Chumphon", "Kalasin", "Kamphaeng Phet", "Kanchanaburi", "Khon Kaen", "Krabi", "Krung Thep", "Lampang", "Lamphun", "Loei", "Lop Buri", "Mae Hong Son", "Maha Sarakham", "Mukdahan", "Nakhon Nayok", "Nakhon Pathom", "Nakhon Phanom", "Nakhon Ratchasima", "Nakhon Sawan", "Nakhon Si Thammarat", "Nan", "Narathiwat", "Nong Khai", "Nonthaburi", "Pathum Thani", "Pattani", "Phangnga", "Phatthalung", "Phayao", "Phetchabun", "Phetchaburi", "Phichit", "Phitsanulok", "Phra Nakhon Si Ayutthaya", "Phrae", "Phuket", "Prachin Buri", "Prachuap Khiri Khan", "Ranong", "Ratchaburi", "Rayong", "Roi Et", "Sakon Nakhon", "Samut Prakan", "Samut Sakhon", "Samut Songkhram", "Saraburi", "Satun", "Sing Buri", "Sisaket", "Songkhla", "Sukhothai", "Suphan Buri", "Surat Thani", "Surin", "Tak", "Trang", "Trat", "Ubon Ratchathani", "Ubon Ratchathani Province", "Udon Thani", "Uthai Thani", "Uttaradit", "Yala", "Yasothon");
var continente216 = new Array('-', "Fu-chien", "Kao-hsiung", "T ai-pei", "T ai-wan");
var continente217 = new Array('-', "Khatlon", "Kuhistoni Badakhshon", "Sughd");
var continente218 = new Array('-', "Arusha", "Arusha Region", "Dar es Salaam", "Dodoma", "Iringa", "Kagera", "Kigoma", "Kilimanjaro", "Lindi", "Mara", "Mbeya", "Morogoro", "Mtwara", "Mwanza", "Pemba North", "Pemba South", "Pwani", "Rukwa", "Ruvuma", "Shinyanga", "Singida", "Tabora", "Tanga", "Zanzibar Central", "Zanzibar North", "Zanzibar Urban");
var continente219 = new Array('-', "Amlame", "Aneho", "Atakpame", "Badou", "Bafilo", "Bassar", "Dapaong", "Kante", "Klouto", "Kpagouda", "Lama-Kara", "Lome", "Mango", "Maritime Region", "Niamtougou", "Notse", "Sotouboua", "Tabligbo", "Tchamba", "Tchaoudjo", "Tsevie", "Vogan");
var continente220 = new Array('-', "Ha", "Tongatapu", "Vava");
var continente221 = new Array('-', "Tokelau (General)");
var continente222 = new Array('-', "Arima", "Caroni", "Mayaro", "Nariva", "Port-of-Spain", "Saint Andrew", "Saint David", "Saint George", "Saint Patrick", "San Fernando", "Tobago", "Victoria");
var continente223 = new Array('-', "Ahal", "Balkan", "Dashoguz", "Lebap", "Mary");
var continente224 = new Array('-', "Adana", "Adiyaman", "Afyon", "Agri", "Aksaray", "Amasya", "Ankara", "Antalya", "Ardahan", "Artvin", "Aydin", "Balikesir", "Bartin", "Batman", "Bayburt", "Bilecik", "Bingol", "Bitlis", "Bolu", "Burdur", "Bursa", "Canakkale", "Cankiri", "Corum", "Denizli", "Diyarbakir", "Duzce", "Edirne", "Elazig", "Erzincan", "Erzurum", "Eskisehir", "Gaziantep", "Giresun", "Gumushane", "Hakkari", "Hatay", "Icel", "Igdir", "Isparta", "Istanbul", "Izmir", "Kahramanmaras", "Karabuk", "Karaman", "Kars", "Kastamonu", "Kayseri", "Kilis", "Kirikkale", "Kirklareli", "Kirsehir", "Kocaeli", "Konya", "Kutahya", "Malatya", "Manisa", "Mardin", "Mugla", "Mus", "Nevsehir", "Nigde", "Ordu", "Osmaniye", "Rize", "Sakarya", "Samsun", "Sanliurfa", "Siirt", "Sinop", "Sirnak", "Sivas", "Tekirdag", "Tokat", "Trabzon", "Tunceli", "Usak", "Van", "Yalova", "Yozgat", "Zonguldak");
var continente225 = new Array('-', "Tuvalu (General)");
var continente226 = new Array('-', "Al Mahdiyah", "Al Munastir", "Al Qasrayn", "Al Qayrawan", "Ariana", "Ariana Governorate", "Bajah", "Banzart", "Bin", "Jundubah", "Kef", "Madanin", "Manouba", "Nabul", "Qabis", "Qafsah", "Qibili", "Safaqis", "Sidi Bu Zayd", "Silyanah", "Susah", "Tatawin", "Tawzar", "Tunis", "Zaghwan");
var continente227 = new Array('-', "Cherkas ka Oblast", "Chernihivska Oblast", "Chernivets ka Oblast", "Dnipropetrovs ka Oblast", "Donets ka Oblast", "Ivano-Frankivs ka Oblast", "Kharkivs ka Oblast", "Khersons ka Oblast", "Khmel nyts ka Oblast", "Kirovohrads ka Oblast", "Krym", "Kyyiv", "Kyyivs ka Oblast", "L vivs ka Oblast", "Luhans ka Oblast", "Mykolayivs ka Oblast", "Odes ka Oblast", "Poltavs ka Oblast", "Rivnens ka Oblast", "Sevastopol", "Sums ka Oblast", "Ternopils ka Oblast", "Vinnyts ka Oblast", "Volyns ka Oblast", "Zakarpats ka Oblast", "Zaporiz ka Oblast", "Zhytomyrs ka Oblast");
var continente228 = new Array('-', "Adjumani", "Arua", "Bugiri", "Busia", "Busoga", "Central", "Eastern", "Iganga", "Kabarole", "Kaberamaido", "Kampala", "Kamwenge", "Kanungu", "Karamoja", "Katakwi", "Kayunga", "Kitgum", "Kyenjojo", "Mayuge", "Mbale", "Moroto", "Mpigi", "Mukono", "Nakapiripirit", "Nakasongola", "Nile", "North Buganda", "Northern", "Pader", "Rukungiri", "Sembabule", "Sironko", "Soroti", "South Buganda", "Southern", "Wakiso", "Western", "Yumbe");
var continente229 = new Array('-', "United States Minor Outlying Islands (General)");
var continente230 = new Array('-', "Artigas", "Canelones", "Cerro Largo", "Colonia", "Durazno", "Flores", "Florida", "Lavalleja", "Maldonado", "Montevideo", "Paysandu", "Rio Negro", "Rivera", "Rocha", "Salto", "San Jose", "Soriano", "Tacuarembo", "Treinta y Tres");
var continente231 = new Array('-', "Andijon", "Bukhoro", "Farghona", "Jizzakh", "Khorazm", "Namangan", "Nawoiy", "Qashqadaryo", "Qoraqalpoghiston", "Samarqand", "Sirdaryo", "Sirdaryo Province", "Surkhondaryo", "Toshkent");
var continente232 = new Array('-', "Ambrym", "Aoba", "Efate", "Epi", "Malakula", "Malampa", "Paama", "Penama", "Pentecote", "Sanma", "Shefa", "Shepherd", "Tafea", "Torba");
var continente233 = new Array('-', "Amazonas", "Anzoategui", "Apure", "Aragua", "Barinas", "Bolivar", "Carabobo", "Cojedes", "Delta Amacuro", "Dependencias Federales", "Distrito Federal", "Falcon", "Guarico", "Lara", "Merida", "Miranda", "Monagas", "Nueva Esparta", "Portuguesa", "Sucre", "Tachira", "Trujillo", "Vargas", "Yaracuy", "Zulia");
var continente234 = new Array('-', "An Giang", "An Giang Province", "Ba Ria-Vung Tau", "Bac Thai", "Ben Tre", "Binh Dinh", "Binh Thuan", "Binh Tri Thien", "Can Tho", "Cao Bang", "Cuu Long", "Dac Lac", "Dac Lak Province", "Dong Nai", "Dong Nai", "Dong Thap", "Gia Lai", "Gia Lai-Kon Tum", "Ha Bac", "Ha Giang", "Ha Nam Ninh", "Ha Noi", "Ha Son Binh", "Ha Tay", "Ha Tinh", "Ha Tuyen", "Hai Hung", "Hai Phong", "Hanoi", "Hau Giang", "Ho Chi Minh", "Hoa Binh", "Hung Yên Province", "Hà Nam Province", "H?i Duong Province", "H? Chí Minh Municipality", "Khanh Hoa", "Kien Giang", "Ki?n Giang Province", "Kon Tum", "Lai Chau", "Lam Dong", "Lang Son", "Lao Cai", "Long An", "Minh Hai", "Minh H?i T?nh", "Nam Ha", "Nghe An", "Nghe Tinh", "Nghia Binh", "Ninh Binh", "Ninh Thuan", "Phu Khanh", "Phu Yen", "Quang Binh", "Quang Nam-Da Nang", "Quang Ngai", "Quang Ninh", "Quang Tri", "Qu?ng Nam Province", "Soc Trang", "Son La", "Song Be", "Tay Ninh", "Thai Binh", "Thanh Hoa", "Thua Thien", "Thái Nguyên Province", "Tien Giang", "Tra Vinh", "Tuyen Quang", "Vinh Long", "Vinh Phu", "Vinh Phú T?nh", "Yen Bai", "Ð?ng Tháp Province");
var continente235 = new Array('-', "Virgin Islands, British (General)");
var continente236 = new Array('-', "Virgin Islands, U.S. (General)");
var continente237 = new Array('-', "Western Sahara (General)");
var continente238 = new Array('-', "Abyan", "Adan", "Adan Governorate", "Al Bayda", "Al Hudaydah", "Al Jawf", "Al Mahrah", "Al Mahwit", "Dhamar", "Hadramawt", "Hajjah", "Ibb", "Lahij", "Ma rib", "Sa", "San", "Shabwah", "Ta", "Taizz Governorate");
var continente239 = new Array('-', "Bandundu", "Bas-Congo", "Equateur", "Kasai-Occidental", "Kasai-Oriental", "Katanga", "Kinshasa", "Kivu", "Maniema", "Nord-Kivu", "Orientale", "Sud-Kivu");
var continente240 = new Array('-', "Central", "Copperbelt", "Eastern", "Luapula", "Lusaka", "North-Western", "Northern", "Southern", "Western");
var continente241 = new Array('-', "Bulawayo", "Harare", "Manicaland", "Mashonaland Central", "Mashonaland East", "Mashonaland West", "Masvingo", "Matabeleland North", "Matabeleland South", "Midlands");


//función que cambia las provincias del select de provincias en función del pais que se haya escogido en el select de continente.
function cambia_pais(){
  //tomo el valor del select del continente elegido
  var pais
  pais = document.f1.pais[document.f1.pais.selectedIndex].value
  //miro a ver si el continente está definido
  if (pais != 0) {
    //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
    //selecciono el array de provincia adecuado
    mis_provincias=eval("continente" + pais)
    //calculo el numero de provincias
    num_provincias = mis_provincias.length
    //marco el número de provincias en el select
    document.f1.paises.length = num_provincias
    //para cada provincia del array, la introduzco en el select
    for(i=0;i<num_provincias;i++){
       document.f1.paises.options[i].value=mis_provincias[i]
       document.f1.paises.options[i].text=mis_provincias[i]
    } 
  }else{
    //si no había provincia seleccionada, elimino las provincias del select
    document.f1.paises.length = 1
    //coloco un guión en la única opción que he dejado
    document.f1.paises.options[0].value = "-"
      document.f1.paises.options[0].text = "-"
  }
  //marco como seleccionada la opción primera de provincia
  document.f1.paises.options[0].selected = true
}

}(jQuery);

import "regenerator-runtime/runtime.js";

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

import "core-js/modules/es.object.to-string.js";
import "core-js/modules/es.promise.js";
import "core-js/modules/web.timers.js";
import "core-js/modules/es.regexp.exec.js";
import "core-js/modules/es.string.split.js";
import "core-js/modules/es.string.repeat.js";
;

(function ($) {
  var timer = function timer(ms) {
    return new Promise(function (res) {
      return setTimeout(res, ms);
    });
  };

  $.fn.typeWrite = function (options) {
    var _this = this;

    var settings = $.extend({
      speed: 50,
      repeat: false,
      cursor: true,
      color: 'black',
      interval: 1000
    }, options);
    var speed = 100 - settings.speed;
    return new Promise(function (res, rej) {
      _this.each( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
        var inputText, text, i, _i;

        return regeneratorRuntime.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                inputText = $(this).text();
                letters = inputText.split('');
                $(this).text('');
                $(this).css('color', settings.color);
                $(this).css('margin', '0px');
                text = letters[0];

              case 6:
                if (!(settings.repeat == true)) {
                  _context.next = 47;
                  break;
                }

                i = 0;

              case 8:
                if (!(i < letters.length)) {
                  _context.next = 42;
                  break;
                }

                if (!(settings.cursor == true)) {
                  _context.next = 28;
                  break;
                }

                if (!(letters[i + 1] !== undefined)) {
                  _context.next = 20;
                  break;
                }

                $(this).text(text);
                $('#cursor').remove();
                $(this).append("<span id='cursor'>︳</span>");
                $('#cursor').css('animation', 'blink 1s infinite');
                text = text + letters[i + 1];
                _context.next = 18;
                return timer(speed);

              case 18:
                _context.next = 26;
                break;

              case 20:
                $(this).text(text);
                $('#cursor').remove();
                $(this).append("<span id='cursor'>︳</span>");
                text = text + letters[i];
                _context.next = 26;
                return timer(settings.interval);

              case 26:
                _context.next = 39;
                break;

              case 28:
                if (!(letters[i + 1] !== undefined)) {
                  _context.next = 35;
                  break;
                }

                $(this).text(text);
                text = text + letters[i + 1];
                _context.next = 33;
                return timer(speed);

              case 33:
                _context.next = 39;
                break;

              case 35:
                $(this).text(text);
                text = text + letters[i];
                _context.next = 39;
                return timer(settings.interval);

              case 39:
                i++;
                _context.next = 8;
                break;

              case 42:
                console.log('Clearing text');
                $(this).text('');
                text = letters[0];
                _context.next = 6;
                break;

              case 47:
                _i = 0;

              case 48:
                if (!(_i < letters.length)) {
                  _context.next = 82;
                  break;
                }

                if (!(settings.cursor == true)) {
                  _context.next = 68;
                  break;
                }

                if (!(letters[_i + 1] !== undefined)) {
                  _context.next = 60;
                  break;
                }

                $(this).text(text);
                $('#cursor').remove();
                $(this).append("<span id='cursor'>︳</span>");
                $('#cursor').css('animation', 'blink 1s infinite');
                text = text + letters[_i + 1];
                _context.next = 58;
                return timer(speed);

              case 58:
                _context.next = 66;
                break;

              case 60:
                $(this).text(text);
                $('#cursor').remove();
                $(this).append("<span id='cursor'>︳</span>");
                text = text + letters[_i];
                _context.next = 66;
                return timer(speed);

              case 66:
                _context.next = 79;
                break;

              case 68:
                if (!(letters[_i + 1] !== undefined)) {
                  _context.next = 75;
                  break;
                }

                $(this).text(text);
                text = text + letters[_i + 1];
                _context.next = 73;
                return timer(speed);

              case 73:
                _context.next = 79;
                break;

              case 75:
                $(this).text(text);
                text = text + letters[_i];
                _context.next = 79;
                return timer(speed);

              case 79:
                _i++;
                _context.next = 48;
                break;

              case 82:
                res('Done');

              case 83:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      })));
    });
  };
  $('.typed').typeWrite({
    repeat: true,
    interval: 4000,
    speed: 20,
    color: "#fff"
  });
})(jQuery);


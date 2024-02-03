//! moment.js locale configuration

;(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined'
        && typeof require === 'function' ? factory(require('../moment')) :
    typeof define === 'function' && define.amd ? define(['../moment'], factory) :
    factory(global.moment)
 }(this, (function (moment) { 'use strict';


     var vi = moment.defineLocale('vi', {
         months : 'ThĂ¡ng 1_ThĂ¡ng 2_ThĂ¡ng 3_ThĂ¡ng 4_ThĂ¡ng 5_ThĂ¡ng 6_ThĂ¡ng 7_ThĂ¡ng 8_ThĂ¡ng 9_ThĂ¡ng 10_ThĂ¡ng 11_ThĂ¡ng 12'.split('_'),
         monthsShort : 'Th01_Th02_Th03_Th04_Th05_Th06_Th07_Th08_Th09_Th10_Th11_Th12'.split('_'),
         monthsParseExact : true,
         weekdays : 'chá»§ nháº­t_thá»© hai_thá»© ba_thá»© tÆ°_thá»© nÄƒm_thá»© sĂ¡u_thá»© báº£y'.split('_'),
         weekdaysShort : 'CN_T2_T3_T4_T5_T6_T7'.split('_'),
         weekdaysMin : 'CN_T2_T3_T4_T5_T6_T7'.split('_'),
         weekdaysParseExact : true,
         meridiemParse: /sa|ch/i,
         isPM : function (input) {
             return /^ch$/i.test(input);
         },
         meridiem : function (hours, minutes, isLower) {
             if (hours < 12) {
                 return isLower ? 'sa' : 'SA';
             } else {
                 return isLower ? 'ch' : 'CH';
             }
         },
         longDateFormat : {
             LT : 'HH:mm',
             LTS : 'HH:mm:ss',
             L : 'DD/MM/YYYY',
             LL : 'D MMMM [nÄƒm] YYYY',
             LLL : 'D MMMM [nÄƒm] YYYY HH:mm',
             LLLL : 'dddd, D MMMM [nÄƒm] YYYY HH:mm',
             l : 'DD/M/YYYY',
             ll : 'D MMM YYYY',
             lll : 'D MMM YYYY HH:mm',
             llll : 'ddd, D MMM YYYY HH:mm'
         },
         calendar : {
             sameDay: '[HĂ´m nay lĂºc] LT',
             nextDay: '[NgĂ y mai lĂºc] LT',
             nextWeek: 'dddd [tuáº§n tá»›i lĂºc] LT',
             lastDay: '[HĂ´m qua lĂºc] LT',
             lastWeek: 'dddd [tuáº§n rá»“i lĂºc] LT',
             sameElse: 'L'
         },
         relativeTime : {
             future : '%s tá»›i',
             past : '%s trÆ°á»›c',
             s : 'vĂ i giĂ¢y',
             ss : '%d giĂ¢y' ,
             m : 'má»™t phĂºt',
             mm : '%d phĂºt',
             h : 'má»™t giá»',
             hh : '%d giá»',
             d : 'má»™t ngĂ y',
             dd : '%d ngĂ y',
             M : 'má»™t thĂ¡ng',
             MM : '%d thĂ¡ng',
             y : 'má»™t nÄƒm',
             yy : '%d nÄƒm'
         },
         dayOfMonthOrdinalParse: /\d{1,2}/,
         ordinal : function (number) {
             return number;
         },
         week : {
             dow : 1, // Monday is the first day of the week.
             doy : 4  // The week that contains Jan 4th is the first week of the year.
         }
     });

     return vi;

 })));

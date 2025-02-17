/**
 * Gets i18n date format
 *
 * @since DOKAN_PRO_SINCE
 */
function dokan_get_i18n_date_format( format = true ) {
  if( ! format ) {
    return dokan_helper.i18n_date_format;
  }

  let formatMap = {
    // Day
    d: 'dd',
    D: 'D',
    j: 'd',
    l: 'DD',
    // Month
    F: 'MM',
    m: 'mm',
    M: 'M',
    n: 'm',
    // Year
    o: 'yy', // not exactly same. see php date doc for details
    Y: 'yy',
    y: 'y'
  }

  let i = 0;
  let char = '';
  let datepickerFormat = '';

  for (i = 0; i < dokan_helper.i18n_date_format.length; i++) {
    char = dokan_helper.i18n_date_format[i];
    if (char in formatMap) {
      datepickerFormat += formatMap[char];
    } else {
      datepickerFormat += char;
    }
  }

  return datepickerFormat;
}

/**
 * Get date range picker supported date format
 *
 * @since 3.3.6
 *
 * @param {string} dateTime The date time to convert
 *
 * @return {string} Date range picker supported date format
 */
function dokan_get_daterange_picker_format( dateTime = dokan_helper.i18n_date_format ) {
  let formatMap = {
    // Day
    d: 'D',
    D: 'DD',
    j: 'D',
    l: 'DD',
    // Month
    F: 'MMMM',
    m: 'MM',
    M: 'MM',
    n: 'M',
    // Year
    o: 'YYYY', // not exactly same. see php date doc for details
    Y: 'YYYY',
    y: 'YY',
    // Hour
    g: 'h',
    G: 'H',
    h: 'hh',
    H: 'HH',
    // Minute
    i: 'mm',
    // Second
    s: 'ss'
  }

  let i = 0;
  let char = '';
  let dateRangePickerFormat = '';

  for ( i = 0; i < dateTime.length; i++ ) {
    char = dateTime[i];

    if ( char in formatMap ) {
      dateRangePickerFormat += formatMap[char];
    } else {
      dateRangePickerFormat += char;
    }
  }

  return dateRangePickerFormat;
}

/**
 * Dokan Sweet Alert
 *
 * @since 3.2.13
 *
 * @param {string} message The event message for notification
 * @param {object} [options] Configuration of sweet alert modal
 *
 * @return {Promise | bool} Return Promise on success, and false on failure
 */
 async function dokan_sweetalert( message = '' , options = {} ) {
  const defaults = {
    text              : message,
    showCancelButton  : true,
    confirmButtonColor:'#28a745',
    cancelButtonColor :'#dc3545',
  };

  const args   = { ...defaults, ...options };
  const action = args.action;

  // Unset action property form args
  delete args.action;

  switch( action ) {
    case 'confirm':
    case 'prompt' :
      return await Swal.fire( args );
      break;

    case 'alert' :
    default :
      delete args.showCancelButton;
      Swal.fire( args );
      break;
  }
}

/**
 * Execute recaptcha token request
 *
 * @since 3.3.3
 *
 * @param {string} inputFieldSelector The input field for recaptcha token
 * @param {string} action The action for recaptcha
 *
 * @return {Promise} Return Promise
 */
function dokan_execute_recaptcha(inputFieldSelector, action) {
  return new Promise( function(resolve) {
    // Check if dokan_google_recaptcha object exists
    if ( 'undefined' === typeof dokan_google_recaptcha ) {
      resolve();
    }

    const recaptchaSiteKey    = dokan_google_recaptcha.recaptcha_sitekey;
    const recaptchaTokenField = document.querySelector(inputFieldSelector);

    // Check if the recaptcha site key exists
    if ( '' === recaptchaSiteKey ) {
      resolve();
    }

    // Execute recaptcha after passing checks
    grecaptcha.ready(function() {
      grecaptcha.execute(recaptchaSiteKey, { action: action }).then(function(token) {
        recaptchaTokenField.value = token;
        resolve();
      });
    });
  });
}

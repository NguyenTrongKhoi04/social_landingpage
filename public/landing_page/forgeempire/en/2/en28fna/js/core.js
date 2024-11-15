$(function ()
{
  var wnd = $('.wnd');
  wnd.steps = wnd.find('.step');

  function progress()
  {
    window.progressBar = $('.progressBar');
    window.progressBarInterval = window.setInterval(function ()
    {
      window.progressBar.css({ 'width': window.progressBar.width() + 5 + 'px' });
      if (window.progressBar.width() >= window.progressBar.parent().width())
      {
        clearInterval(window.progressBarInterval);
        wnd.steps.eq(3).fadeOut('fast', function ()
        {
          wnd.steps.eq(4).fadeIn('fast');
        });
      }
    }, 30);
  }

  wnd.steps.eq(0).find('.btn').click(function (e)
  {
    e.preventDefault();
    wnd.steps.eq(0).fadeOut('fast', function ()
    { wnd.steps.eq(1).fadeIn('fast'); });
  });

  wnd.steps.eq(1).find('.btn').click(function (e)
  {
    e.preventDefault();
    wnd.steps.eq(1).fadeOut('fast', function ()
    {
      wnd.steps.eq(2).fadeIn('fast'); 
    });
    return false;
  });
   wnd.steps.eq(2).find('.btn').click(function (e)
  {
    e.preventDefault();
    wnd.steps.eq(2).fadeOut('fast', function ()
    {
     wnd.steps.eq(3).css({ 'display': 'block' });
      wnd.steps.eq(3).animate({ height: 295 }, 'fast', progress);
    });
    return false;
  });
   wnd.steps.eq(3).find('.btn').click(function (e)
  {
    e.preventDefault();
    wnd.steps.eq(3).fadeOut('fast', function ()
    {
      wnd.steps.eq(4).css({ 'display': 'block' });
      wnd.steps.eq(4).animate({ height: 295 }, 'fast', progress);
    });
    return false;
  });

});
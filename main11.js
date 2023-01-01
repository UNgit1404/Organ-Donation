function chatBot() {
  // function getUrl(that) {
  //    return "know_us.html";
  // }
  this.input;

  this.respondTo = function (input) {

    this.input = input.toLowerCase();

    if (this.match('(hi|hello|process)'))
    return "Hi Sir/Madam!";

    if (this.match('(why donate)')) 
    return "To know about importance of donation <a href='why.html'>click here</a>";

    if (this.match('(organ donation)'))
   	return "This is guide to help you know about donation process <a href='know_us.html'> click here</a>";

   	if (this.match('(grants and research)'))
   	return "Get to know about grants and research <a href='research.html'> click here</a>";

   	if (this.match('(search record)'))
   	return "Get to know about grants and research <a href='search.html'> click here</a>";

    if (this.match('(signup)')) 
    return "<a href='donor_reg.html'>click here</a>";

    if (this.match('(hospital register)')) 
    return "To get your hospital registered on our website <a href='hospital_reg.html'>click here</a>";

    return input + ", I don't understand what it is";
  };


  this.match = function (regex) {

    return new RegExp(regex).test(this.input);
  };
}


$(function () {


  var you = 'You';
  var robot = 'Assistant';


  var delayStart = 400;
  var delayEnd = 800;


  var bot = new chatBot();
  var chat = $('.chat');
  var waiting = 0;
  $('.busy').text(robot + ' is typing...');


  var submitChat = function () {

    var input = $('.input input').val();
    if (input == '') return;

    $('.input input').val('');
    updateChat(you, input);

    var reply = bot.respondTo(input);
    if (reply == null) return;

    var latency = Math.floor(Math.random() * (delayEnd - delayStart) + delayStart);
    $('.busy').css('display', 'block');
    waiting++;
    setTimeout(function () {
      if (typeof reply === 'string') {
        updateChat(robot, reply);
      } else {
        for (var r in reply) {
          updateChat(robot, reply[r]);
        }
      }
      if (--waiting == 0) $('.busy').css('display', 'none');
    }, latency);
  };

  var updateChat = function (party, text) {

    var style = 'you';
    if (party != you) {
      style = 'other';
    }

    var line = $('<div><span class="party"></span> <span class="text"></span></div>');
    line.find('.party').addClass(style).text(party + ':');
    line.find('.text').html(text);

    chat.append(line);

    chat.stop().animate({ scrollTop: chat.prop("scrollHeight") });

  };


  $('.input').bind('keydown', function (e) {
    if (e.keyCode == 13) {
      submitChat();
    }
  });
  $('.input a').bind('click', submitChat);


  updateChat(robot, 'Hello write me something');

});

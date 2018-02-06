$(document).ready(function () {

    var URL = window.location.href;

    if (URL.includes("MeatBall")) {
        commentUrl = "GetJsonMeatBallComment";
        var recipe = 'meatballs';
    } else if (URL.includes("PanCake")) {
        commentUrl = "GetJsonPanCakeComment";
        var recipe = 'pancakes';
    }
    commentPostUrl = "CommentData";
    commentDeleteUrl = "ShowCommentData";
    usernameUrl = "GetUsername";

    function Comment(userid, message, commentID, isAuthor) {
        var self = this;
        self.userid = userid;
        self.message = message;
        self.commentID = commentID;
        self.isAuthor = isAuthor;
    }

    function Conversation() {
        var self = this;
        self.comments = ko.observableArray();
        self.commentText = ko.observable();
        
        
        $.getJSON(usernameUrl, function (jsonData) {
            self.username = jsonData;
            self.getNewComments();
        });
        
        
        self.getNewComments = function () {
            $.getJSON(commentUrl, function (jsonData) {
                self.comments.removeAll();
                for (var i = 0; i < jsonData.length; i++) {
                    var oneComment = jsonData[i];
                    var isAuthor = self.username === oneComment.userid;
                    self.comments.push(new Comment(oneComment.userid, oneComment.message, oneComment.commentID, isAuthor));
                }
                ;
            });
        };
        self.getNewComments();

        self.postComment = function () {
            $.post(commentPostUrl, "username=" + self.username + "&recipe=" + recipe + "&commentText=" + ko.toJS(self.commentText), function () {
                self.getNewComments();
            });
            self.commentText("");
        };

        self.deleteComment = function (commentID) {
            $.post(commentDeleteUrl, "commentID=" + commentID, function () {
                self.getNewComments();
            });
        };
    }

    var conversation = new Conversation();
    ko.applyBindings(conversation, document.getElementById('commentsToShow'));
    ko.applyBindings(conversation, document.getElementById('commentBoxToShow'));
});
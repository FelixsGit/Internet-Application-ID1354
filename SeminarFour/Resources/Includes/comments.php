<?php
use TastyRecipes\Util\Constants;

if ($this->session->get(Constants::USER_LOGGED_IN) != 'notLoggedIn') {
    ?>
    <div id="commentBoxToShow">
        <div>
            <textarea data-bind="value: commentText" placeholder="Type comment here"></textarea>
        </div>
        <div>
            <button class = 'commentButton' data-bind="click: postComment">Comment</button>  
        </div>     
    </div>
    <?php
}
?>
<div id="commentsToShow">
    <div data-bind="foreach: comments"class="completedComments" >
        <b><div data-bind="text: userid" id='userid'></div></b>  
        <i><div data-bind="text: message" id='message'></div></i>
        <!-- ko if: isAuthor -->
        <button class='deletecommentButton' data-bind="click: $parent.deleteComment.bind($data, commentID)">Delete</button>
        <!-- /ko -->
        <br></br>            
    </div>
</div>
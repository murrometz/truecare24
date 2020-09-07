<?php
$title = "Matched providers";

include $_SERVER["DOCUMENT_ROOT"]."/framework/header.php";
?>
    <table class="info-table" id="matched-providers">
        <thead><tr class="table-title">
            <td class="type">Type</td>
            <td class="name">Name</td>
            <td class="email"><span class="hidden-desktop-medium">Email</span> <span class="visible-desktop-medium">Contacts</span></td>
            <td class="phone hidden-desktop-medium">Phone</td>
            <td class="id hidden-laptop">ID</td>
            <td class="status status-contacting">Status</td>
            <td class="actions"></td>
        </tr></thead><tbody>
        <tr>
            <td class="type" data-id="120">
                <div class="type-contracted"></div>
                <div class="type-person"></div>
            </td>
            <td class="name">Roman Muradyan
                <div class="visible-laptop id">ID: 120</div>
            </td>
            <td class="email"><a href="mailto:r.muradyan@team.com">r.muradyan@team.com</a>
            <div class="visible-desktop-medium phone">
                <a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a>
            </div>
            </td>
            <td class="phone hidden-desktop-medium"><a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a></td>
            <td class="id hidden-laptop">120</td>
            <td class="status status-contacting"><span>Contacting</span></td>
            <td class="actions">
                <button class="chat">CHAT</button>
                <button class="call">CALL</button>
                <button class="menu tooltip-trigger"><span class='visible-tablet'>MORE ACTIONS</span></button>
            </td>
        </tr>
        <tr>
            <td class="type" data-id="999999999999">
                <div class="type-contracted"></div>
                <div class="type-person"></div>
            </td>
            <td class="name">Arch Newson
                <div class="visible-laptop id">ID: 999999999999</div>
            </td>
            <td class="email"><a href="mailto:a.newson@team-with-very-long-email.com">a.newson@team-with-very-long-email.com</a>
                <div class="visible-desktop-medium"><br />
                    <a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a>
                </div>
            </td>
            <td class="phone hidden-desktop-medium"><a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a></td>
            <td class="id hidden-laptop">999999999999</td>
            <td class="status status-talked"><span>Talked to the client</span></td>
            <td class="actions">
                <button class="chat">CHAT</button>
                <button class="call">CALL</button>
                <button class="menu tooltip-trigger"><span class='visible-tablet'>MORE ACTIONS</span></button>
            </td>
        </tr>
        <tr>
            <td class="type" data-id="123">
                <div class="type-non-contracted"></div>
                <div class="type-person"></div>
            </td>
            <td class="name">Main La
                <div class="visible-laptop id">ID: 123</div>
            </td>
            <td class="email"><a href="mailto:m.la@team.com">m.la@team.com</a>
                <div class="visible-desktop-medium"><br />
                    <a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a>
                </div>
            </td>
            <td class="phone hidden-desktop-medium"><a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a></td>
            <td class="id hidden-laptop">123</td>
            <td class="status status-scheduled"><span>Assessment scheduled</span></td>
            <td class="actions">
                <button class="chat">CHAT</button>
                <button class="call">CALL</button>
                <button class="menu tooltip-trigger"><span class='visible-tablet'>MORE ACTIONS</span></button>
            </td>
        </tr>
        <tr>
            <td class="type" data-id="124">
                <div class="type-non-contracted"></div>
                <div class="type-agency"></div>
            </td>
            <td class="name">John Lead LA, Inc.
                <div class="visible-laptop id">ID: 124</div>
            </td>
            <td class="email"><a href="mailto:email@jlead.com">email@jlead.com</a>
                <div class="visible-desktop-medium"><br />
                    <a href="tel:+1 (223) 839-1223, Ext. 200">+1 (223) 839-1223, Ext. 200</a>
                </div>
            </td>
            <td class="phone hidden-desktop-medium"><a href="tel:+1 (223) 839-1223, Ext. 200">+1 (223) 839-1223, Ext. 200</a></td>
            <td class="id hidden-laptop">124</td>
            <td class="status status-contract-signed"><span>Contract Signed</span></td>
            <td class="actions">
                <button class="chat">CHAT</button>
                <button class="call">CALL</button>
                <button class="menu tooltip-trigger"><span class='visible-tablet'>MORE ACTIONS</span></button>
            </td>
        </tr>
        <tr class="cancelled" data-id="126">
            <td class="type">
                <div class="type-contracted"></div>
                <div class="type-person"></div>
            </td>
            <td class="name">Jacob Like
                <div class="visible-laptop id">ID: 126</div>
            </td>
            <td class="email"><a href="mailto:j.like@team.com">j.like@team.com</a>
                <div class="visible-desktop-medium"><br />
                    <a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a>
                </div>
            </td>
            <td class="phone hidden-desktop-medium"><a href="tel:+1 (223) 839-1223">+1 (223) 839-1223</a></td>
            <td class="id hidden-laptop">126</td>
            <td class="status status-cancelled"><span>Cancel the client</span></td>
            <td class="actions">
                <button class="chat">CHAT</button>
                <button class="call">CALL</button>
                <button class="menu tooltip-trigger"><span class='visible-tablet'>MORE ACTIONS</span></button>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="tooltip actions-tooltip" role="tooltip">
        <div class="item">Send intro</div>
        <div class="item" data-fancybox data-src="#feedback-modal" data-options='{"touch" : false}'>Provide feedback</div>
        <div class="item">Send reminder</div>
        <div class="item">Background check</div>
    </div>
    <div class="tooltip statuses-tooltip" role="tooltip">
        <div class="item status-contacting"><span>Contacting</span></div>
        <div class="item status-talked"><span>Talked to the client</span></div>
        <div class="item status-scheduled"><span>Assessment scheduled</span></div>
        <div class="item status-contract-signed"><span>Contract Signed</span></div>
        <div class="item status-cancelled"><span>Cancel the client</span></div>
    </div>
    <div id="feedback-modal" class="modal">
        <div class="header">
            Set the rating and provide<br/> the feedback note:
        </div>
        <div class="rating">

        </div>
        <div class="text">
            <textarea placeholder="Type here"></textarea>
        </div>
        <div class="buttons">
            <button class="save-button">Save</button>
        </div>
    </div>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/framework/footer.php";
?>
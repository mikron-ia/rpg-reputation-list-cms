<?php

/* @var $this yii\web\View */

$this->title = 'Reputation List CMS';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Reputation events</h1>

        <p class="lead">
            Main component of the system. Reputation events are changes in reputations, connected to people and -
            sometimes - connected to events.
        </p>

        <p><a class="btn btn-lg btn-success" href="reputation">Reputation events</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Events</h2>

                <p>
                    Events the reputation events are connected to. Reputation event may be connected to either one event
                    or no event at all.
                </p>

                <p><a class="btn btn-default" href="event">Events &raquo;</a></p>
            </div>
            <div class="col-lg-6">
                <h2>People</h2>

                <p>
                    List of people to who are the events attached. Every reputation event is attached to exactly one
                    person.
                </p>

                <p><a class="btn btn-default" href="person">People &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

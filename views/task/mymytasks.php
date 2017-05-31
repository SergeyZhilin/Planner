<h1>My tasks</h1>
<?php
    use \yii\widgets\ActiveForm;
    use yii\helpers\Url;
    $this->title = 'My tasks'; 
    $this->params['breadcrumbs'][] = $this->title;
    // print_r($tasks); die();
?>
    <!-- <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/helpers/helpers-all.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/elements/elements-all.css"> -->
  <!--   <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/icons/font-awesome-new/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/icons/linecons/linecons.css">
    <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/snippets/snippets-all.css">
    <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/applications/mailbox.css">
    <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/themes/supina/layout.css">
    <link id="layout-color" rel="stylesheet" type="text/css" href="/web/css/assets-minified/themes/supina/default/layout-color.css">
    <link id="framework-color" rel="stylesheet" type="text/css" href="/web/css/assets-minified/themes/supina/default/framework-color.css">
    <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/themes/supina/border-radius.css"> -->
    <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/helpers/colors.css">
    <!-- <link rel="stylesheet" type="text/css" href="/web/css/assets-minified/demo-widgets.css"> -->
    <link rel="stylesheet" href="/web/css/proTables.css">

<!-- <script src="http://gitlab.a-level.com.ua/gitgod/nanobind/raw/master/static/nb.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
<!-- <script type="text/javascript" src="/web/js/demo-widgets.js"></script> -->
<!-- <script src="/web/js/jquery.jsonrpc.js"></script> -->
<script src="/web/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/web/js/nb.js"></script>
<!-- <script type="text/javascript" src="/web/js/table.js"></script> -->


<a href="<?php echo Url::to(['task/create']) . "/new"; ?>" class="btn btn-default col-md-1" style="margin-left: 180px; margin-top: -45px" >Create new</a>


<div class="section2">
    <div class="wrapper">
        <div class="projects">
            <table class="jsTT" id='treeTable'> <!-- please turn it off by display: none -->
                <thead>
                <tr>
                    <th class="width-name">Name</th>
                    <th class="width-employer">Employer</th>
                    <th class="width-default">Last Activity</th>
                    <th class="width-default">Deadline</th>
                    <th class="width-default">Status</th>
                    <th class="width-progress">Progress</th>
                    <!-- <th class="width-files">        </th> -->
                </tr>
                </thead>
                <tbody id='tree'>
                <tr class="treeTr">
                    <td class="taskname">
                        <span class='indent'></span>
                        <div class="show-tree" >
                            <input type="checkbox" class='checkInput'>
                            <!-- <label for="check1" class='checkLabel'></label> -->
                        </div>
                        <span class='name'></span>
                    </td>
                    <td class='employer'></td>
                    <td class='lastActivity'></td>
                    <td class='deadline' style='overflow:hidden;'></td>
                    <td class='status'></td>
                    <td>
                        <div class="progress-bar-for-time">
                            <div class="progressbar-smaller progressbar forTime tooltip-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Time Progress - 21%" data-value="21">
                                <div class="progressbar-value bg-blue mainProgress" style="width: 0%; overflow: hidden;"></div>
                            </div>
                        </div>
                        <!-- <div class="progress-bar-for-time">
                            <div class="progressbar-smaller progressbar forTime tooltip-button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Progress - 40%" data-value="40">
                                <div class="progressbar-value bg-orange timeProgress" style="width: 40%; overflow: hidden;"></div>
                            </div>
                        </div> -->
                    </td>
                    <!-- <td>
                        <div class="file-links">
                            <a href="#" class='docs'><i class="fa fa-files-o" aria-hidden="true"></i></a>
                            <a href="#" class='notificationExists'>
                                <span class="bs-badge badge-absolute bg-green notifications">2</span>
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </a>
                        </div>
                    </td> -->
                </tr>
                </tbody>
            </table>
            <div class="proj-info" id='details' style="height: 600px">
                <div class="proj-info-header">
                    <p>
                     <span>Last Activity:: </span><span class="lastActivity"> </span>
                    </p>
                    <p class="status-par">
                        <span>Status::</span>
                        <span class="status">...</span>
                    </p>
                </div>
                <div class="proj-description">
                    <div class="owner-block">
                        <!-- <div class="owner-avatar">
                            <img src="/web/images/images/avatar-default.png" class="avatar">
                        </div> -->
                        <span>Owner:: </span><span class="owner"> </span>
                    </div>
                    <div class="employers-block">
                        <p>
                        <span>Employer:: </span><span class="employer"></span>
                        </p>
                    </div>
                    <p>
                    <span>Description:: </span><span class="description">Description::  </span>
                    </p>
                </div>

                <!-- <button id="addSubtask">Add a subtask</button> -->
                <a class="addSubtask btn btn-default col-md-5" >Add a subtask</a>
                <a class="goTask btn btn-default col-md-5" >Go to task</a>

                <!-- <div class="task-dependencies">
                    <p class="dep-title">Task dependencies</p>
                    <ul class="dependencies">
                        <li class="dependencies-item"></li>
                    </ul>
                </div> -->
                
                <div class="task-progress-block">
                    <div class="prog-item">
                        <p class="progress-icon">Progress</p>
                        <div class="progress-bar-for-time">
                            <div class="progressbar-smaller progressbar forTime">
                                <div class="progressbar-value bg-blue mainProgress" style="width: 0%; overflow: hidden;"></div>
                            </div>
                            <span class="progressLabel">0%</span>
                        </div>
                    </div>
                    <!-- <div class="prog-item">
                        <p class="progress-icon">Progress</p>
                        <div class="progress-bar-for-time">
                            <div class="progressbar-smaller progressbar forTime">
                                <div class="progressbar-value bg-orange timeProgress" style="width: 0%; overflow: hidden;"></div>
                            </div>
                            <span class="timeProgressLabel">0%</span>
                        </div>
                    </div> -->
                    <div class="prog-item">
                        <p class="deadline-icon">Deadline</p>
                        <p class="deadline">...</p>
                    </div>
                    <div class="prog-item">
                        <p class="start-time">Start time</p>
                        <p class="startTime">...</p>
                    </div>
                    <div class="prog-item">
                        <p class="time-spend">Time spend</p>
                        <p class="timeSpend">...</p>
                    </div>
                    <div class="prog-item">
                        <p class="estimate-icon">Estimate</p>
                        <p>
                            <span class="estim-hours estimate">0</span>
                            <span>hours</span>
                        </p>
                    </div>
                </div>
                <!-- <div class="tags-block">
                    <p>Tags:</p>
                    <ul class="tags">
                        <li></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>



<script>
$t = nbInit("treeTable");
$d = nbInit();
$d.details = false;
var tasks = [];
var activeTaskIndex = null;


function expandHandler(){
    var me = this;
    var rowIndex = me.parentElement.parentElement.parentElement.rowIndex;
    console.log(me.itemId)
    if (this.checked){
        if (rowIndex < tasks.length && tasks[rowIndex -1].level < tasks[rowIndex].level){
            for (var i=rowIndex;i<tasks.length && tasks[i].level > tasks[rowIndex -1].level;i++){
                tasks[i].treeTr.style = "display:  table-row;";
            }
        }
        else {
            $.get('<?php echo Url::to(['task/get-my-my-tasks-parent']);?>', {'itemId':me.itemId}, function(result){
                result = JSON.parse(result);
                console.log(result)
                addTasks(result, rowIndex, me.level +1);
            });
        }
        tasks[rowIndex -1].checkInput.checked = true;
    }
    else {
        for (var i=rowIndex;i<tasks.length && tasks[i].level > tasks[rowIndex -1].level;i++){
            tasks[i].treeTr.style = "display:  none;";
        }
        tasks[rowIndex -1].checkInput.checked = false;
    }
    $t.tree = tasks;
}

function detailsShow(){
    $d.details = true;
    $d.details = this.nbData
    if (activeTaskIndex !== null){
        var task = tasks[activeTaskIndex];
        task.treeTr.classList.value = ["status-" + task.status, task.type].join(" ")
    }
    activeTaskIndex = tasks.indexOf(this.nbData);
    var task = tasks[activeTaskIndex];
    task.treeTr.classList.value = ["status-" + task.status, task.type, "active-task"].join(" ")

    $t.tree = tasks;
}

function r(){
    alert('sdasdasdas')
}

function addTasks(data, rowIndex, level){
    data = data.map(function(item){
        console.log(item.tags)
        item.progressLabel     = item.percentcomplete + "%"
        item.timeProgressLabel = item.timeProgress + "%"
        item.task_name         = {style: "width: " + item.task_name + "; "}
        item.progress          = {style: "width: " + item.percentcomplete + "%; overflow: hidden;"}
        item.timeProgress      = {style: "width: " + item.timeProgress + "%; overflow: hidden;"}
        item.goTask            = {href: "<?php echo Url::to(['task/task']); ?>" + "/" + item.id}
        item.addSubtask        = {href: "<?php echo Url::to(['task/create']); ?>" + "/" + item.id}
        item.docs              = item.docs != 0;
        item.notificationExists= item.notifications != 0;
        item.mainProgress      = item.progress;
        item.tagss             = item.tags;
        item.indent            = {style: "padding-left: " + 15*level + "px;"}
        item.level             = level
        item.avatar            = {src: '/web/images/images/avatar-default.png',
                                  alt: item.owner
                                 }

        item.timeSpend         = item.timespend;
        item.checkInput        = {    
                                    id: 'check' + item.id,
                                    itemId: item.id,
                                    level: level,
                                    onclick: expandHandler,
                                    checked: false
                                 }

        item.checkLabel        = {
                                    htmlFor: 'check' + item.id,
                                    // onclick: r,
                                 } 
        item.treeTr            = {classList: {value: ["status-" + item.status, item.type].join(" ")}, //TODO check why doesn't  works classlist as array
                                  onclick: detailsShow 
                                 }

        delete item.progress;
        return item;
    });

    tasks.splice.apply(tasks, [rowIndex, 0].concat(data))

    $t.tree = tasks;
}

$.get('<?php echo Url::to(['task/get-my-my-tasks']);?>', {}, function(result){
    result = JSON.parse(result)
    addTasks(result,0,0);
});

</script>

<!DOCTYPE html>

<div class="parallax-container valign-wrapper min-height-5">
  <div class="container " id="purpose">
    <h1><b>Adversary</b></h1>
    <h3><br/>Task: Restart the adversary cleanly</h3>
  </div>
  <div class="parallax"><img src="img/aresBG-3.jpg" alt="Unsplashed background img 1"></div>
</div>

<!-- Main container -->
<div class="container">
  <div class="section z-depth-2 white">
    <!-- opening two cols -->
    <div class="row">
      <div class="col s12 m6 z-depth-0 ">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">adb</i></h2>
          <h5 class="center">Setting Up VirtualBox with Kali</h5>
          <div class="row">
            <div class="col s6">
              <img class="center materialboxed responsive-img" src="img/adversary/vbox.png">
            </div>
            <div class="col s6 ">
              <img class="center materialboxed responsive-img" src="img/adversary/kali.jpg">
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 z-depth-0 ">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">public</i></h2>
          <h5 class="center"> Connect and Familiarize with Adversary Framework </h5>

          <div class="row">
            <div class="col s12">
              <img class="center materialboxed responsive-img" src="img/adversary/kali2.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- init tabs -->
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s4"><a href="#stage_problem">The Problem</a></li>
          <li class="tab col s1"><a href="#stage1">1</a></li>
          <li class="tab col s1"><a href="#stage2">2</a></li>
          <li class="tab col s1"><a href="#stage3">3</a></li>
          <li class="tab col s1"><a href="#stage4">4</a></li>
          <li class="tab col s4"><a href="#conclusion">Conclusion</a></li>
        </ul>
      </div>
      <!-- stages -->
      <div id="stage_problem" class="col s12">
        <div class="col s12 m6 offset-m3 z-depth-0 ">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">adb</i></h2>
            <h5 class="center">Tackling the Problem: Clean Restart</h5>
            <p class="light">When shutting down the adversary, it is common practice to press ctrl-c. However, you then need to manually shut down some processes that don't automatically shut down. My task was to shut it all down in one clean go.</p><br>
          </div>
        </div>
      </div>
      <div id="stage1" class="col s12">
        <div class="col s12 m6 offset-m3 z-depth-0 ">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">adb</i></h2>
            <h5 class="center">Stage One</h5>
            <ul class="light list-items">
              <li>The first natural place to start was writing a function in main to catch the ctrl-c signal (linux specific). Then, once the signal is recieved, instruct the terminal to kill the processes. </li><br/><li>Technically speaking, I had completed the task. Had I been working on a solo project, I might have stopped here.</li><br/><li> However, this aproach has two problems: it is OS specific, and executing bash commands from python is not clean. </li></ul>
          </div>
        </div>
      </div>
      <div id="stage2" class="col s12">
        <div class="col s12 m6 offset-m3 z-depth-0 ">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">adb</i></h2>
            <h5 class="center">Stage Two: </h5>
            <ul class="light list-items">
              <li>The next logical step was to execute a series of functions that kill the jobs one by one once the ctrl-c signal is recieved. </li><br/><li>This eliminates one of the problems from stage one, because we are killing the processes in the code instead of executing a command. </li><br/><li> This aproach still leaves one problem: it is OS specific, so if Circadence ever wanted to run the adversary framework on Windows, my code would break.</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="stage3" class="col s12">
        <div class="col s12 m6 offset-m3 z-depth-0 ">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">adb</i></h2>
            <h5 class="center">Stage Three: </h5>
            <ul class="light list-items">
              <li>Now to solve the last problem: catch ctrl-c using app context, instead of linux signals.</li><br/><li>This worked! This eliminates the OS-specificity and makes the code fully transferable. I then merged with master. But then…………</li><br/><li> 10 problems: everything broke due to the changes that happened in the last few days. The joys of working with other people.</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="stage4" class="col s12">
        <div class="col s12 m6 offset-m3 z-depth-0 ">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">adb</i></h2>
            <h5 class="center">Stage Four: </h5>
            <ul class="light list-items">
              <li>Multiple threads = multiple app contexts = my code is broken.</li><br/>
              <li>Rethink everything, and finally decide to move away from ctrl-c to shutdown.</li><br/>
              <li>I ended up writing a bash script to execute a curl command named clean_shutdown. </li><br/>
              <li>This is a screenshot of fixing pylint errors and pushing my code.</li>
            </ul>
            <div class="row">
              <div class="col s12">
                <img class="center materialboxed responsive-img" src="img/adversary/kali3.png">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="conclusion" class="col s12">
        <div class="col s12 m6 offset-m3 z-depth-0 ">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">adb</i></h2>
            <h5 class="center">Done! </h5>
            <ul class="light list-items">
              <li>This made me appreciate that writing code that works (stage 1) isn't always all that matters.</li><br/>
              <li>Writing code that’s both clean <b>and</b> works with everyone else's code (stage 4) can be much more difficult than the original task.</li><br/>
              <li>This starts to matter more and more with bigger projects.</li><br/>
              <li>This is a screenshot of some of the commands I was using for testing and debugging. </li>
            </ul>
            <div class="row">
              <div class="col s12">
                <img class="center materialboxed responsive-img" src="img/adversary/kali1.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- separator -->
<div class="parallax-container min-height-1">
  <div class="parallax">
    <img src="img/background/smoke2/v2.png" alt="Unsplashed background img 1">
  </div>
</div>

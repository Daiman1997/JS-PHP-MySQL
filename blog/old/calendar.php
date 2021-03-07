<div class="calendar">
  <div class="slider">
    <a href="#">◄</a>
    <p>Сентябрь</p>
    <a href="#">►</a>
  </div>
  <div class="days-week">
    <div class="">Пн</div>
    <div class="">Вт</div>
    <div class="">Ср</div>
    <div class="">Чт</div>
    <div class="">Пт</div>
    <div class="">Сб</div>
    <div class="">Вс</div>
  </div>
  <div class="days-counter">
    <div class="no-day"><a href="#"></a></div>
    <div class="day"><a href="#">1</a></div>
    <div class="day"><a href="#">2</a></div>
    <div class="day"><a href="#">3</a></div>
    <div class="day"><a href="#">4</a></div>
    <div class="day"><a href="#">5</a></div>
    <div class="day"><a href="#">6</a></div>
    <div class="day"><a href="#">7</a></div>
    <div class="day"><a href="#">8</a></div>
    <div class="day"><a href="#">9</a></div>
    <div class="day"><a href="#">10</a></div>
    <div class="day"><a href="#">11</a></div>
    <div class="day"><a href="#">12</a></div>
    <div class="day"><a href="#">13</a></div>
    <div class="day"><a href="#">14</a></div>
    <div class="day"><a href="#">15</a></div>
    <div class="day"><a href="#">16</a></div>
    <div class="day"><a href="#">17</a></div>
    <div class="day"><a href="#">18</a></div>
    <div class="day"><a href="#">19</a></div>
    <div class="day"><a href="#">20</a></div>
    <div class="day"><a href="#">21</a></div>
    <div class="day"><a href="#">22</a></div>
    <div class="day"><a href="#">23</a></div>
    <div class="day"><a href="#">24</a></div>
    <div class="day"><a href="#">25</a></div>
    <div class="day"><a href="#">26</a></div>
    <div class="day"><a href="#">27</a></div>
    <div class="day"><a href="#">28</a></div>
    <div class="day"><a href="#">29</a></div>
    <div class="day"><a href="#">30</a></div>
    <div class="day"><a href="#">31</a></div>
  </div>
</div>

<style>
    .calendar {
      background-color: rgb(153, 218, 255, 0.7);
      flex-direction: column;
      justify-content: flex-end;
      display: flex;
      padding: 40px 40px;
      border-radius: 50%;
      width: 260px;
      position: fixed;
      margin: 100px;
    }

    .days-week {
      width: 245px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      padding: 0 5px 0 5px;
      z-index: 2;
    }

    .days-week div {
      width: 35px;
      height: 35px;
      text-decoration: underline;
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgb(198, 12, 201);
    }

    .days-counter {
      width: 245px;
      min-height: 180px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      padding: 0 5px 5px 5px;
      z-index: 2;
    }

    .days-counter .no-day,
    .days-counter .day {
      width: 35px;
      height: 35px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-sizing: border-box;
      border-radius: 50%;
      transition: all 0.3s ease-out;
    }

    .days-counter .day:hover {
      background-color: rgb(250, 12, 210, 0.4);
      box-shadow: inset 0 0 10px rgb(102, 13, 87, 0.7);
    }

    .day a {
      text-decoration: none;
      color: rgb(42, 9, 173);
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .days-counter .no-job {
      border: 4px ridge red;
    }

    .slider p {
      color: rgb(198, 12, 201);
      margin: 0 15px 0 15px;
      padding: 0;
    }

    .slider {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      width: 245px;
      padding: 5px;
      z-index: 2;
    }

    .slider a {
      color: #21EDFF;
      background-color: red;
      text-decoration: none;
      padding: 5px 15px 5px 15px;
      border-radius: 40px;
      transition: all 0.3s ease-out;
    }

    .slider a:hover {
      transform: scale(1.2);
      background-color: #ff0d55;
    }

    .slider a:active {
      transform: scale(0.2);
      background-color: #FF1C63;
    }

    .calendar::after {
      content: "";
      z-index: 1;
      width: 340px;
      height: 340px;
      border: 10px ridge red;
      position: absolute;
      border-radius: 50%;
      left: -10px;
      bottom: -10px;
      animation-name: spin;
      animation-duration: 10s;
      animation-timing-function: linear;
      animation-delay: 2s;
      animation-iteration-count: infinite;
      animation-direction: normal;
      animation-play-state: running;
    }

    .calendar::before {
      content: "";
      z-index: 1;
      width: 360px;
      height: 360px;
      border: 10px ridge red;
      position: absolute;
      border-radius: 50%;
      left: -20px;
      bottom: -20px;
      animation-name: spin;
      animation-duration: 10s;
      animation-timing-function: linear;
      animation-delay: 0s;
      animation-iteration-count: infinite;
      animation-direction: reverse;
      animation-play-state: running;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100%{
        transform: rotate(360deg);
      }
    }
</style>

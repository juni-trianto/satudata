<div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
          <div class="col-span-12 lg:col-span-8">
            <div class="flex items-center justify-between space-x-2">
              <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
                <?= $page_title; ?>
              </h2>
              <div x-data="{activeTab:'tabRecent'}" class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-200 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                <div class="tabs-list flex p-1">
                  <button @click="activeTab = 'tabRecent'" :class="activeTab === 'tabRecent' ? 'bg-white shadow dark:bg-navy-500 dark:text-navy-100' : 'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 px-3 py-1 text-xs+ font-medium bg-white shadow dark:bg-navy-500 dark:text-navy-100">
                    Last month
                  </button>
                  <button @click="activeTab = 'tabAll'" :class="activeTab === 'tabAll' ? 'bg-white shadow dark:bg-navy-500 dark:text-navy-100' : 'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 px-3 py-1 text-xs+ font-medium hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
                    Last year
                  </button>
                </div>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:space-x-7">
              <div class="mt-4 flex shrink-0 flex-col items-center sm:items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <div class="mt-4">
                  <div class="flex items-center space-x-1">
                    <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                      $6,556.55
                    </p>
                    <button class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                      </svg>
                    </button>
                  </div>
                  <p class="text-xs text-slate-400 dark:text-navy-300">
                    this month
                  </p>
                </div>
                <div class="mt-3 flex items-center space-x-2">
                  <div class="ax-transparent-gridline w-28">
                    <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.analyticsSalesThisMonth); $el._x_chart.render() });" style="min-height: 60px;"><div id="apexchartsufudt1g4" class="apexcharts-canvas apexchartsufudt1g4 apexcharts-theme-light" style="width: 112px; height: 60px;"><svg id="SvgjsSvg1485" width="112" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="112" height="60"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 30px;"></div></foreignObject><rect id="SvgjsRect1489" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1520" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1487" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)"><defs id="SvgjsDefs1486"><clipPath id="gridRectMaskufudt1g4"><rect id="SvgjsRect1491" width="119" height="48" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskufudt1g4"></clipPath><clipPath id="nonForecastMaskufudt1g4"></clipPath><clipPath id="gridRectMarkerMaskufudt1g4"><rect id="SvgjsRect1492" width="116" height="49" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1490" x1="0" y1="0" x2="0" y2="45" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="45" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1498" class="apexcharts-grid"><g id="SvgjsG1499" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1503" x1="0" y1="9" x2="112" y2="9" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1504" x1="0" y1="18" x2="112" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1505" x1="0" y1="27" x2="112" y2="27" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1506" x1="0" y1="36" x2="112" y2="36" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1500" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1509" x1="0" y1="45" x2="112" y2="45" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1508" x1="0" y1="1" x2="0" y2="45" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1493" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1494" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1497" d="M 0 15.57C 7.839999999999999 15.57 14.559999999999999 8.100000000000001 22.4 8.100000000000001C 30.24 8.100000000000001 36.96 40.41 44.8 40.41C 52.64 40.41 59.36 20.7 67.2 20.7C 75.03999999999999 20.7 81.75999999999999 38.07 89.6 38.07C 97.44 38.07 104.16 17.369999999999997 112 17.369999999999997" fill="none" fill-opacity="1" stroke="rgba(68,103,239,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskufudt1g4)" pathTo="M 0 15.57C 7.839999999999999 15.57 14.559999999999999 8.100000000000001 22.4 8.100000000000001C 30.24 8.100000000000001 36.96 40.41 44.8 40.41C 52.64 40.41 59.36 20.7 67.2 20.7C 75.03999999999999 20.7 81.75999999999999 38.07 89.6 38.07C 97.44 38.07 104.16 17.369999999999997 112 17.369999999999997" pathFrom="M -1 45 L -1 45 L 22.4 45 L 44.8 45 L 67.2 45 L 89.6 45 L 112 45" fill-rule="evenodd"></path><g id="SvgjsG1495" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1524" r="0" cx="0" cy="0" class="apexcharts-marker wpovpy061 no-pointer-events" stroke="#ffffff" fill="#4467ef" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1496" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG1501" class="apexcharts-grid-borders"><line id="SvgjsLine1502" x1="0" y1="0" x2="112" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1507" x1="0" y1="45" x2="112" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1510" x1="0" y1="0" x2="112" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1511" x1="0" y1="0" x2="112" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1512" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1513" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1521" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1522" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1523" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1525" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1526" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(68, 103, 239);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                  </div>
                  <div class="flex items-center space-x-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                    </svg>
                    <p class="text-sm+ text-slate-800 dark:text-navy-100">
                      3.2%
                    </p>
                  </div>
                </div>
                <button class="btn mt-8 space-x-2 rounded-full border border-slate-300 px-3 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                  </svg>
                  <span> Download Report</span>
                </button>
              </div>

              <div class="ax-transparent-gridline grid w-full grid-cols-1">
                <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.analyticsSalesOverview); $el._x_chart.render() });" style="min-height: 255px;"><div id="apexcharts70kwnjssf" class="apexcharts-canvas apexcharts70kwnjssf apexcharts-theme-light" style="width: 411px; height: 255px;"><svg id="SvgjsSvg1527" width="411" height="255" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="411" height="255"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 127.5px;"></div></foreignObject><g id="SvgjsG1643" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1529" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 30)"><defs id="SvgjsDefs1528"><linearGradient id="SvgjsLinearGradient1531" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1532" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1533" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1534" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask70kwnjssf"><rect id="SvgjsRect1536" width="415" height="195.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask70kwnjssf"></clipPath><clipPath id="nonForecastMask70kwnjssf"></clipPath><clipPath id="gridRectMarkerMask70kwnjssf"><rect id="SvgjsRect1537" width="415" height="199.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1535" width="9.41875" height="195.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1531)" class="apexcharts-xcrosshairs" y2="195.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1593" class="apexcharts-grid"><g id="SvgjsG1594" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1598" x1="0" y1="65.24333333333333" x2="411" y2="65.24333333333333" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1599" x1="0" y1="130.48666666666665" x2="411" y2="130.48666666666665" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1600" x1="0" y1="195.72999999999996" x2="411" y2="195.72999999999996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1595" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1602" x1="0" y1="195.73" x2="411" y2="195.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1601" x1="0" y1="1" x2="0" y2="195.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1538" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1539" class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0"><path id="SvgjsPath1543" d="M 7.706250000000001 191.731 L 7.706250000000001 108.39033333333333 C 7.706250000000001 106.39033333333333 9.70625 104.39033333333333 11.70625 104.39033333333333 L 13.125 104.39033333333333 C 15.125 104.39033333333333 17.125 106.39033333333333 17.125 108.39033333333333 L 17.125 191.731 C 17.125 193.731 15.125 195.731 13.125 195.731 L 11.70625 195.731 C 9.70625 195.731 7.706250000000001 193.731 7.706250000000001 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 7.706250000000001 191.731 L 7.706250000000001 108.39033333333333 C 7.706250000000001 106.39033333333333 9.70625 104.39033333333333 11.70625 104.39033333333333 L 13.125 104.39033333333333 C 15.125 104.39033333333333 17.125 106.39033333333333 17.125 108.39033333333333 L 17.125 191.731 C 17.125 193.731 15.125 195.731 13.125 195.731 L 11.70625 195.731 C 9.70625 195.731 7.706250000000001 193.731 7.706250000000001 191.731 Z " pathFrom="M 7.706250000000001 195.731 L 7.706250000000001 195.731 L 17.125 195.731 L 17.125 195.731 L 17.125 195.731 L 17.125 195.731 L 17.125 195.731 L 7.706250000000001 195.731 Z" cy="104.38933333333333" cx="41.95625" j="0" val="28" barHeight="91.34066666666666" barWidth="9.41875"></path><path id="SvgjsPath1545" d="M 41.95625 191.731 L 41.95625 52.9335 C 41.95625 50.9335 43.95625 48.9335 45.95625 48.9335 L 47.375 48.9335 C 49.375 48.9335 51.375 50.9335 51.375 52.9335 L 51.375 191.731 C 51.375 193.731 49.375 195.731 47.375 195.731 L 45.95625 195.731 C 43.95625 195.731 41.95625 193.731 41.95625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 41.95625 191.731 L 41.95625 52.9335 C 41.95625 50.9335 43.95625 48.9335 45.95625 48.9335 L 47.375 48.9335 C 49.375 48.9335 51.375 50.9335 51.375 52.9335 L 51.375 191.731 C 51.375 193.731 49.375 195.731 47.375 195.731 L 45.95625 195.731 C 43.95625 195.731 41.95625 193.731 41.95625 191.731 Z " pathFrom="M 41.95625 195.731 L 41.95625 195.731 L 51.375 195.731 L 51.375 195.731 L 51.375 195.731 L 51.375 195.731 L 51.375 195.731 L 41.95625 195.731 Z" cy="48.932500000000005" cx="76.20625" j="1" val="45" barHeight="146.79749999999999" barWidth="9.41875"></path><path id="SvgjsPath1547" d="M 76.20625 191.731 L 76.20625 85.55516666666666 C 76.20625 83.55516666666666 78.20625 81.55516666666666 80.20625 81.55516666666666 L 81.625 81.55516666666666 C 83.625 81.55516666666666 85.625 83.55516666666666 85.625 85.55516666666666 L 85.625 191.731 C 85.625 193.731 83.625 195.731 81.625 195.731 L 80.20625 195.731 C 78.20625 195.731 76.20625 193.731 76.20625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 76.20625 191.731 L 76.20625 85.55516666666666 C 76.20625 83.55516666666666 78.20625 81.55516666666666 80.20625 81.55516666666666 L 81.625 81.55516666666666 C 83.625 81.55516666666666 85.625 83.55516666666666 85.625 85.55516666666666 L 85.625 191.731 C 85.625 193.731 83.625 195.731 81.625 195.731 L 80.20625 195.731 C 78.20625 195.731 76.20625 193.731 76.20625 191.731 Z " pathFrom="M 76.20625 195.731 L 76.20625 195.731 L 85.625 195.731 L 85.625 195.731 L 85.625 195.731 L 85.625 195.731 L 85.625 195.731 L 76.20625 195.731 Z" cy="81.55416666666666" cx="110.45625" j="2" val="35" barHeight="114.17583333333333" barWidth="9.41875"></path><path id="SvgjsPath1549" d="M 110.45625 191.731 L 110.45625 36.62266666666667 C 110.45625 34.62266666666667 112.45625 32.62266666666667 114.45625 32.62266666666667 L 115.875 32.62266666666667 C 117.875 32.62266666666667 119.875 34.62266666666667 119.875 36.62266666666667 L 119.875 191.731 C 119.875 193.731 117.875 195.731 115.875 195.731 L 114.45625 195.731 C 112.45625 195.731 110.45625 193.731 110.45625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 110.45625 191.731 L 110.45625 36.62266666666667 C 110.45625 34.62266666666667 112.45625 32.62266666666667 114.45625 32.62266666666667 L 115.875 32.62266666666667 C 117.875 32.62266666666667 119.875 34.62266666666667 119.875 36.62266666666667 L 119.875 191.731 C 119.875 193.731 117.875 195.731 115.875 195.731 L 114.45625 195.731 C 112.45625 195.731 110.45625 193.731 110.45625 191.731 Z " pathFrom="M 110.45625 195.731 L 110.45625 195.731 L 119.875 195.731 L 119.875 195.731 L 119.875 195.731 L 119.875 195.731 L 119.875 195.731 L 110.45625 195.731 Z" cy="32.62166666666667" cx="144.70625" j="3" val="50" barHeight="163.10833333333332" barWidth="9.41875"></path><path id="SvgjsPath1551" d="M 144.70625 191.731 L 144.70625 95.34166666666667 C 144.70625 93.34166666666667 146.70625 91.34166666666667 148.70625 91.34166666666667 L 150.125 91.34166666666667 C 152.125 91.34166666666667 154.125 93.34166666666667 154.125 95.34166666666667 L 154.125 191.731 C 154.125 193.731 152.125 195.731 150.125 195.731 L 148.70625 195.731 C 146.70625 195.731 144.70625 193.731 144.70625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 144.70625 191.731 L 144.70625 95.34166666666667 C 144.70625 93.34166666666667 146.70625 91.34166666666667 148.70625 91.34166666666667 L 150.125 91.34166666666667 C 152.125 91.34166666666667 154.125 93.34166666666667 154.125 95.34166666666667 L 154.125 191.731 C 154.125 193.731 152.125 195.731 150.125 195.731 L 148.70625 195.731 C 146.70625 195.731 144.70625 193.731 144.70625 191.731 Z " pathFrom="M 144.70625 195.731 L 144.70625 195.731 L 154.125 195.731 L 154.125 195.731 L 154.125 195.731 L 154.125 195.731 L 154.125 195.731 L 144.70625 195.731 Z" cy="91.34066666666666" cx="178.95625" j="4" val="32" barHeight="104.38933333333333" barWidth="9.41875"></path><path id="SvgjsPath1553" d="M 178.95625 191.731 L 178.95625 20.311833333333336 C 178.95625 18.311833333333336 180.95625 16.311833333333336 182.95625 16.311833333333336 L 184.375 16.311833333333336 C 186.375 16.311833333333336 188.375 18.311833333333336 188.375 20.311833333333336 L 188.375 191.731 C 188.375 193.731 186.375 195.731 184.375 195.731 L 182.95625 195.731 C 180.95625 195.731 178.95625 193.731 178.95625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 178.95625 191.731 L 178.95625 20.311833333333336 C 178.95625 18.311833333333336 180.95625 16.311833333333336 182.95625 16.311833333333336 L 184.375 16.311833333333336 C 186.375 16.311833333333336 188.375 18.311833333333336 188.375 20.311833333333336 L 188.375 191.731 C 188.375 193.731 186.375 195.731 184.375 195.731 L 182.95625 195.731 C 180.95625 195.731 178.95625 193.731 178.95625 191.731 Z " pathFrom="M 178.95625 195.731 L 178.95625 195.731 L 188.375 195.731 L 188.375 195.731 L 188.375 195.731 L 188.375 195.731 L 188.375 195.731 L 178.95625 195.731 Z" cy="16.310833333333335" cx="213.20625" j="5" val="55" barHeight="179.41916666666665" barWidth="9.41875"></path><path id="SvgjsPath1555" d="M 213.20625 191.731 L 213.20625 124.70116666666667 C 213.20625 122.70116666666667 215.20625 120.70116666666667 217.20625 120.70116666666667 L 218.625 120.70116666666667 C 220.625 120.70116666666667 222.625 122.70116666666667 222.625 124.70116666666667 L 222.625 191.731 C 222.625 193.731 220.625 195.731 218.625 195.731 L 217.20625 195.731 C 215.20625 195.731 213.20625 193.731 213.20625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 213.20625 191.731 L 213.20625 124.70116666666667 C 213.20625 122.70116666666667 215.20625 120.70116666666667 217.20625 120.70116666666667 L 218.625 120.70116666666667 C 220.625 120.70116666666667 222.625 122.70116666666667 222.625 124.70116666666667 L 222.625 191.731 C 222.625 193.731 220.625 195.731 218.625 195.731 L 217.20625 195.731 C 215.20625 195.731 213.20625 193.731 213.20625 191.731 Z " pathFrom="M 213.20625 195.731 L 213.20625 195.731 L 222.625 195.731 L 222.625 195.731 L 222.625 195.731 L 222.625 195.731 L 222.625 195.731 L 213.20625 195.731 Z" cy="120.70016666666666" cx="247.45625" j="6" val="23" barHeight="75.02983333333333" barWidth="9.41875"></path><path id="SvgjsPath1557" d="M 247.45625 191.731 L 247.45625 4.001 C 247.45625 2.0010000000000003 249.45625 0.001 251.45625 0.001 L 252.875 0.001 C 254.875 0.001 256.875 2.001 256.875 4.001 L 256.875 191.731 C 256.875 193.731 254.875 195.731 252.875 195.731 L 251.45625 195.731 C 249.45625 195.731 247.45625 193.731 247.45625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 247.45625 191.731 L 247.45625 4.001 C 247.45625 2.0010000000000003 249.45625 0.001 251.45625 0.001 L 252.875 0.001 C 254.875 0.001 256.875 2.001 256.875 4.001 L 256.875 191.731 C 256.875 193.731 254.875 195.731 252.875 195.731 L 251.45625 195.731 C 249.45625 195.731 247.45625 193.731 247.45625 191.731 Z " pathFrom="M 247.45625 195.731 L 247.45625 195.731 L 256.875 195.731 L 256.875 195.731 L 256.875 195.731 L 256.875 195.731 L 256.875 195.731 L 247.45625 195.731 Z" cy="0" cx="281.70625" j="7" val="60" barHeight="195.73" barWidth="9.41875"></path><path id="SvgjsPath1559" d="M 281.70625 191.731 L 281.70625 108.39033333333333 C 281.70625 106.39033333333333 283.70625 104.39033333333333 285.70625 104.39033333333333 L 287.125 104.39033333333333 C 289.125 104.39033333333333 291.125 106.39033333333333 291.125 108.39033333333333 L 291.125 191.731 C 291.125 193.731 289.125 195.731 287.125 195.731 L 285.70625 195.731 C 283.70625 195.731 281.70625 193.731 281.70625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 281.70625 191.731 L 281.70625 108.39033333333333 C 281.70625 106.39033333333333 283.70625 104.39033333333333 285.70625 104.39033333333333 L 287.125 104.39033333333333 C 289.125 104.39033333333333 291.125 106.39033333333333 291.125 108.39033333333333 L 291.125 191.731 C 291.125 193.731 289.125 195.731 287.125 195.731 L 285.70625 195.731 C 283.70625 195.731 281.70625 193.731 281.70625 191.731 Z " pathFrom="M 281.70625 195.731 L 281.70625 195.731 L 291.125 195.731 L 291.125 195.731 L 291.125 195.731 L 291.125 195.731 L 291.125 195.731 L 281.70625 195.731 Z" cy="104.38933333333333" cx="315.95625" j="8" val="28" barHeight="91.34066666666666" barWidth="9.41875"></path><path id="SvgjsPath1561" d="M 315.95625 191.731 L 315.95625 52.9335 C 315.95625 50.9335 317.95625 48.9335 319.95625 48.9335 L 321.375 48.9335 C 323.375 48.9335 325.375 50.9335 325.375 52.9335 L 325.375 191.731 C 325.375 193.731 323.375 195.731 321.375 195.731 L 319.95625 195.731 C 317.95625 195.731 315.95625 193.731 315.95625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 315.95625 191.731 L 315.95625 52.9335 C 315.95625 50.9335 317.95625 48.9335 319.95625 48.9335 L 321.375 48.9335 C 323.375 48.9335 325.375 50.9335 325.375 52.9335 L 325.375 191.731 C 325.375 193.731 323.375 195.731 321.375 195.731 L 319.95625 195.731 C 317.95625 195.731 315.95625 193.731 315.95625 191.731 Z " pathFrom="M 315.95625 195.731 L 315.95625 195.731 L 325.375 195.731 L 325.375 195.731 L 325.375 195.731 L 325.375 195.731 L 325.375 195.731 L 315.95625 195.731 Z" cy="48.932500000000005" cx="350.20625" j="9" val="45" barHeight="146.79749999999999" barWidth="9.41875"></path><path id="SvgjsPath1563" d="M 350.20625 191.731 L 350.20625 85.55516666666666 C 350.20625 83.55516666666666 352.20625 81.55516666666666 354.20625 81.55516666666666 L 355.625 81.55516666666666 C 357.625 81.55516666666666 359.625 83.55516666666666 359.625 85.55516666666666 L 359.625 191.731 C 359.625 193.731 357.625 195.731 355.625 195.731 L 354.20625 195.731 C 352.20625 195.731 350.20625 193.731 350.20625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 350.20625 191.731 L 350.20625 85.55516666666666 C 350.20625 83.55516666666666 352.20625 81.55516666666666 354.20625 81.55516666666666 L 355.625 81.55516666666666 C 357.625 81.55516666666666 359.625 83.55516666666666 359.625 85.55516666666666 L 359.625 191.731 C 359.625 193.731 357.625 195.731 355.625 195.731 L 354.20625 195.731 C 352.20625 195.731 350.20625 193.731 350.20625 191.731 Z " pathFrom="M 350.20625 195.731 L 350.20625 195.731 L 359.625 195.731 L 359.625 195.731 L 359.625 195.731 L 359.625 195.731 L 359.625 195.731 L 350.20625 195.731 Z" cy="81.55416666666666" cx="384.45625" j="10" val="35" barHeight="114.17583333333333" barWidth="9.41875"></path><path id="SvgjsPath1565" d="M 384.45625 191.731 L 384.45625 36.62266666666667 C 384.45625 34.62266666666667 386.45625 32.62266666666667 388.45625 32.62266666666667 L 389.875 32.62266666666667 C 391.875 32.62266666666667 393.875 34.62266666666667 393.875 36.62266666666667 L 393.875 191.731 C 393.875 193.731 391.875 195.731 389.875 195.731 L 388.45625 195.731 C 386.45625 195.731 384.45625 193.731 384.45625 191.731 Z " fill="rgba(76,78,231,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 384.45625 191.731 L 384.45625 36.62266666666667 C 384.45625 34.62266666666667 386.45625 32.62266666666667 388.45625 32.62266666666667 L 389.875 32.62266666666667 C 391.875 32.62266666666667 393.875 34.62266666666667 393.875 36.62266666666667 L 393.875 191.731 C 393.875 193.731 391.875 195.731 389.875 195.731 L 388.45625 195.731 C 386.45625 195.731 384.45625 193.731 384.45625 191.731 Z " pathFrom="M 384.45625 195.731 L 384.45625 195.731 L 393.875 195.731 L 393.875 195.731 L 393.875 195.731 L 393.875 195.731 L 393.875 195.731 L 384.45625 195.731 Z" cy="32.62166666666667" cx="418.70625" j="11" val="50" barHeight="163.10833333333332" barWidth="9.41875"></path><g id="SvgjsG1541" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1542" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1544" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1546" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1548" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1550" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1552" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1554" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1556" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1558" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1560" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1562" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1564" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1566" class="apexcharts-series" rel="2" seriesName="Profit" data:realIndex="1"><path id="SvgjsPath1570" d="M 17.125 191.731 L 17.125 154.06066666666666 C 17.125 152.06066666666666 19.125 150.06066666666666 21.125 150.06066666666666 L 22.54375 150.06066666666666 C 24.54375 150.06066666666666 26.54375 152.06066666666666 26.54375 154.06066666666666 L 26.54375 191.731 C 26.54375 193.731 24.54375 195.731 22.54375 195.731 L 21.125 195.731 C 19.125 195.731 17.125 193.731 17.125 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 17.125 191.731 L 17.125 154.06066666666666 C 17.125 152.06066666666666 19.125 150.06066666666666 21.125 150.06066666666666 L 22.54375 150.06066666666666 C 24.54375 150.06066666666666 26.54375 152.06066666666666 26.54375 154.06066666666666 L 26.54375 191.731 C 26.54375 193.731 24.54375 195.731 22.54375 195.731 L 21.125 195.731 C 19.125 195.731 17.125 193.731 17.125 191.731 Z " pathFrom="M 17.125 195.731 L 17.125 195.731 L 26.54375 195.731 L 26.54375 195.731 L 26.54375 195.731 L 26.54375 195.731 L 26.54375 195.731 L 17.125 195.731 Z" cy="150.05966666666666" cx="51.375" j="0" val="14" barHeight="45.67033333333333" barWidth="9.41875"></path><path id="SvgjsPath1572" d="M 51.375 191.731 L 51.375 118.17683333333333 C 51.375 116.17683333333333 53.375 114.17683333333333 55.375 114.17683333333333 L 56.79375 114.17683333333333 C 58.79375 114.17683333333333 60.79375 116.17683333333333 60.79375 118.17683333333333 L 60.79375 191.731 C 60.79375 193.731 58.79375 195.731 56.79375 195.731 L 55.375 195.731 C 53.375 195.731 51.375 193.731 51.375 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 51.375 191.731 L 51.375 118.17683333333333 C 51.375 116.17683333333333 53.375 114.17683333333333 55.375 114.17683333333333 L 56.79375 114.17683333333333 C 58.79375 114.17683333333333 60.79375 116.17683333333333 60.79375 118.17683333333333 L 60.79375 191.731 C 60.79375 193.731 58.79375 195.731 56.79375 195.731 L 55.375 195.731 C 53.375 195.731 51.375 193.731 51.375 191.731 Z " pathFrom="M 51.375 195.731 L 51.375 195.731 L 60.79375 195.731 L 60.79375 195.731 L 60.79375 195.731 L 60.79375 195.731 L 60.79375 195.731 L 51.375 195.731 Z" cy="114.17583333333333" cx="85.625" j="1" val="25" barHeight="81.55416666666666" barWidth="9.41875"></path><path id="SvgjsPath1574" d="M 85.625 191.731 L 85.625 134.48766666666666 C 85.625 132.48766666666666 87.625 130.48766666666666 89.625 130.48766666666666 L 91.04375 130.48766666666666 C 93.04375 130.48766666666666 95.04375 132.48766666666666 95.04375 134.48766666666666 L 95.04375 191.731 C 95.04375 193.731 93.04375 195.731 91.04375 195.731 L 89.625 195.731 C 87.625 195.731 85.625 193.731 85.625 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 85.625 191.731 L 85.625 134.48766666666666 C 85.625 132.48766666666666 87.625 130.48766666666666 89.625 130.48766666666666 L 91.04375 130.48766666666666 C 93.04375 130.48766666666666 95.04375 132.48766666666666 95.04375 134.48766666666666 L 95.04375 191.731 C 95.04375 193.731 93.04375 195.731 91.04375 195.731 L 89.625 195.731 C 87.625 195.731 85.625 193.731 85.625 191.731 Z " pathFrom="M 85.625 195.731 L 85.625 195.731 L 95.04375 195.731 L 95.04375 195.731 L 95.04375 195.731 L 95.04375 195.731 L 95.04375 195.731 L 85.625 195.731 Z" cy="130.48666666666665" cx="119.875" j="2" val="20" barHeight="65.24333333333334" barWidth="9.41875"></path><path id="SvgjsPath1576" d="M 119.875 191.731 L 119.875 118.17683333333333 C 119.875 116.17683333333333 121.875 114.17683333333333 123.875 114.17683333333333 L 125.29374999999999 114.17683333333333 C 127.29374999999999 114.17683333333333 129.29375 116.17683333333333 129.29375 118.17683333333333 L 129.29375 191.731 C 129.29375 193.731 127.29374999999999 195.731 125.29374999999999 195.731 L 123.875 195.731 C 121.875 195.731 119.875 193.731 119.875 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 119.875 191.731 L 119.875 118.17683333333333 C 119.875 116.17683333333333 121.875 114.17683333333333 123.875 114.17683333333333 L 125.29374999999999 114.17683333333333 C 127.29374999999999 114.17683333333333 129.29375 116.17683333333333 129.29375 118.17683333333333 L 129.29375 191.731 C 129.29375 193.731 127.29374999999999 195.731 125.29374999999999 195.731 L 123.875 195.731 C 121.875 195.731 119.875 193.731 119.875 191.731 Z " pathFrom="M 119.875 195.731 L 119.875 195.731 L 129.29375 195.731 L 129.29375 195.731 L 129.29375 195.731 L 129.29375 195.731 L 129.29375 195.731 L 119.875 195.731 Z" cy="114.17583333333333" cx="154.125" j="3" val="25" barHeight="81.55416666666666" barWidth="9.41875"></path><path id="SvgjsPath1578" d="M 154.125 191.731 L 154.125 160.585 C 154.125 158.585 156.125 156.585 158.125 156.585 L 159.54375 156.585 C 161.54375 156.585 163.54375 158.585 163.54375 160.585 L 163.54375 191.731 C 163.54375 193.731 161.54375 195.731 159.54375 195.731 L 158.125 195.731 C 156.125 195.731 154.125 193.731 154.125 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 154.125 191.731 L 154.125 160.585 C 154.125 158.585 156.125 156.585 158.125 156.585 L 159.54375 156.585 C 161.54375 156.585 163.54375 158.585 163.54375 160.585 L 163.54375 191.731 C 163.54375 193.731 161.54375 195.731 159.54375 195.731 L 158.125 195.731 C 156.125 195.731 154.125 193.731 154.125 191.731 Z " pathFrom="M 154.125 195.731 L 154.125 195.731 L 163.54375 195.731 L 163.54375 195.731 L 163.54375 195.731 L 163.54375 195.731 L 163.54375 195.731 L 154.125 195.731 Z" cy="156.584" cx="188.375" j="4" val="12" barHeight="39.146" barWidth="9.41875"></path><path id="SvgjsPath1580" d="M 188.375 191.731 L 188.375 134.48766666666666 C 188.375 132.48766666666666 190.375 130.48766666666666 192.375 130.48766666666666 L 193.79375 130.48766666666666 C 195.79375 130.48766666666666 197.79375 132.48766666666666 197.79375 134.48766666666666 L 197.79375 191.731 C 197.79375 193.731 195.79375 195.731 193.79375 195.731 L 192.375 195.731 C 190.375 195.731 188.375 193.731 188.375 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 188.375 191.731 L 188.375 134.48766666666666 C 188.375 132.48766666666666 190.375 130.48766666666666 192.375 130.48766666666666 L 193.79375 130.48766666666666 C 195.79375 130.48766666666666 197.79375 132.48766666666666 197.79375 134.48766666666666 L 197.79375 191.731 C 197.79375 193.731 195.79375 195.731 193.79375 195.731 L 192.375 195.731 C 190.375 195.731 188.375 193.731 188.375 191.731 Z " pathFrom="M 188.375 195.731 L 188.375 195.731 L 197.79375 195.731 L 197.79375 195.731 L 197.79375 195.731 L 197.79375 195.731 L 197.79375 195.731 L 188.375 195.731 Z" cy="130.48666666666665" cx="222.625" j="5" val="20" barHeight="65.24333333333334" barWidth="9.41875"></path><path id="SvgjsPath1582" d="M 222.625 191.731 L 222.625 150.7985 C 222.625 148.7985 224.625 146.7985 226.625 146.7985 L 228.04375 146.7985 C 230.04375 146.7985 232.04375 148.7985 232.04375 150.7985 L 232.04375 191.731 C 232.04375 193.731 230.04375 195.731 228.04375 195.731 L 226.625 195.731 C 224.625 195.731 222.625 193.731 222.625 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 222.625 191.731 L 222.625 150.7985 C 222.625 148.7985 224.625 146.7985 226.625 146.7985 L 228.04375 146.7985 C 230.04375 146.7985 232.04375 148.7985 232.04375 150.7985 L 232.04375 191.731 C 232.04375 193.731 230.04375 195.731 228.04375 195.731 L 226.625 195.731 C 224.625 195.731 222.625 193.731 222.625 191.731 Z " pathFrom="M 222.625 195.731 L 222.625 195.731 L 232.04375 195.731 L 232.04375 195.731 L 232.04375 195.731 L 232.04375 195.731 L 232.04375 195.731 L 222.625 195.731 Z" cy="146.79749999999999" cx="256.875" j="6" val="15" barHeight="48.9325" barWidth="9.41875"></path><path id="SvgjsPath1584" d="M 256.875 191.731 L 256.875 134.48766666666666 C 256.875 132.48766666666666 258.875 130.48766666666666 260.875 130.48766666666666 L 262.29375 130.48766666666666 C 264.29375 130.48766666666666 266.29375 132.48766666666666 266.29375 134.48766666666666 L 266.29375 191.731 C 266.29375 193.731 264.29375 195.731 262.29375 195.731 L 260.875 195.731 C 258.875 195.731 256.875 193.731 256.875 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 256.875 191.731 L 256.875 134.48766666666666 C 256.875 132.48766666666666 258.875 130.48766666666666 260.875 130.48766666666666 L 262.29375 130.48766666666666 C 264.29375 130.48766666666666 266.29375 132.48766666666666 266.29375 134.48766666666666 L 266.29375 191.731 C 266.29375 193.731 264.29375 195.731 262.29375 195.731 L 260.875 195.731 C 258.875 195.731 256.875 193.731 256.875 191.731 Z " pathFrom="M 256.875 195.731 L 256.875 195.731 L 266.29375 195.731 L 266.29375 195.731 L 266.29375 195.731 L 266.29375 195.731 L 266.29375 195.731 L 256.875 195.731 Z" cy="130.48666666666665" cx="291.125" j="7" val="20" barHeight="65.24333333333334" barWidth="9.41875"></path><path id="SvgjsPath1586" d="M 291.125 191.731 L 291.125 154.06066666666666 C 291.125 152.06066666666666 293.125 150.06066666666666 295.125 150.06066666666666 L 296.54375 150.06066666666666 C 298.54375 150.06066666666666 300.54375 152.06066666666666 300.54375 154.06066666666666 L 300.54375 191.731 C 300.54375 193.731 298.54375 195.731 296.54375 195.731 L 295.125 195.731 C 293.125 195.731 291.125 193.731 291.125 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 291.125 191.731 L 291.125 154.06066666666666 C 291.125 152.06066666666666 293.125 150.06066666666666 295.125 150.06066666666666 L 296.54375 150.06066666666666 C 298.54375 150.06066666666666 300.54375 152.06066666666666 300.54375 154.06066666666666 L 300.54375 191.731 C 300.54375 193.731 298.54375 195.731 296.54375 195.731 L 295.125 195.731 C 293.125 195.731 291.125 193.731 291.125 191.731 Z " pathFrom="M 291.125 195.731 L 291.125 195.731 L 300.54375 195.731 L 300.54375 195.731 L 300.54375 195.731 L 300.54375 195.731 L 300.54375 195.731 L 291.125 195.731 Z" cy="150.05966666666666" cx="325.375" j="8" val="14" barHeight="45.67033333333333" barWidth="9.41875"></path><path id="SvgjsPath1588" d="M 325.375 191.731 L 325.375 118.17683333333333 C 325.375 116.17683333333333 327.375 114.17683333333333 329.375 114.17683333333333 L 330.79375 114.17683333333333 C 332.79375 114.17683333333333 334.79375 116.17683333333333 334.79375 118.17683333333333 L 334.79375 191.731 C 334.79375 193.731 332.79375 195.731 330.79375 195.731 L 329.375 195.731 C 327.375 195.731 325.375 193.731 325.375 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 325.375 191.731 L 325.375 118.17683333333333 C 325.375 116.17683333333333 327.375 114.17683333333333 329.375 114.17683333333333 L 330.79375 114.17683333333333 C 332.79375 114.17683333333333 334.79375 116.17683333333333 334.79375 118.17683333333333 L 334.79375 191.731 C 334.79375 193.731 332.79375 195.731 330.79375 195.731 L 329.375 195.731 C 327.375 195.731 325.375 193.731 325.375 191.731 Z " pathFrom="M 325.375 195.731 L 325.375 195.731 L 334.79375 195.731 L 334.79375 195.731 L 334.79375 195.731 L 334.79375 195.731 L 334.79375 195.731 L 325.375 195.731 Z" cy="114.17583333333333" cx="359.625" j="9" val="25" barHeight="81.55416666666666" barWidth="9.41875"></path><path id="SvgjsPath1590" d="M 359.625 191.731 L 359.625 134.48766666666666 C 359.625 132.48766666666666 361.625 130.48766666666666 363.625 130.48766666666666 L 365.04375 130.48766666666666 C 367.04375 130.48766666666666 369.04375 132.48766666666666 369.04375 134.48766666666666 L 369.04375 191.731 C 369.04375 193.731 367.04375 195.731 365.04375 195.731 L 363.625 195.731 C 361.625 195.731 359.625 193.731 359.625 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 359.625 191.731 L 359.625 134.48766666666666 C 359.625 132.48766666666666 361.625 130.48766666666666 363.625 130.48766666666666 L 365.04375 130.48766666666666 C 367.04375 130.48766666666666 369.04375 132.48766666666666 369.04375 134.48766666666666 L 369.04375 191.731 C 369.04375 193.731 367.04375 195.731 365.04375 195.731 L 363.625 195.731 C 361.625 195.731 359.625 193.731 359.625 191.731 Z " pathFrom="M 359.625 195.731 L 359.625 195.731 L 369.04375 195.731 L 369.04375 195.731 L 369.04375 195.731 L 369.04375 195.731 L 369.04375 195.731 L 359.625 195.731 Z" cy="130.48666666666665" cx="393.875" j="10" val="20" barHeight="65.24333333333334" barWidth="9.41875"></path><path id="SvgjsPath1592" d="M 393.875 191.731 L 393.875 118.17683333333333 C 393.875 116.17683333333333 395.875 114.17683333333333 397.875 114.17683333333333 L 399.29375 114.17683333333333 C 401.29375 114.17683333333333 403.29375 116.17683333333333 403.29375 118.17683333333333 L 403.29375 191.731 C 403.29375 193.731 401.29375 195.731 399.29375 195.731 L 397.875 195.731 C 395.875 195.731 393.875 193.731 393.875 191.731 Z " fill="rgba(14,165,233,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask70kwnjssf)" pathTo="M 393.875 191.731 L 393.875 118.17683333333333 C 393.875 116.17683333333333 395.875 114.17683333333333 397.875 114.17683333333333 L 399.29375 114.17683333333333 C 401.29375 114.17683333333333 403.29375 116.17683333333333 403.29375 118.17683333333333 L 403.29375 191.731 C 403.29375 193.731 401.29375 195.731 399.29375 195.731 L 397.875 195.731 C 395.875 195.731 393.875 193.731 393.875 191.731 Z " pathFrom="M 393.875 195.731 L 393.875 195.731 L 403.29375 195.731 L 403.29375 195.731 L 403.29375 195.731 L 403.29375 195.731 L 403.29375 195.731 L 393.875 195.731 Z" cy="114.17583333333333" cx="428.125" j="11" val="25" barHeight="81.55416666666666" barWidth="9.41875"></path><g id="SvgjsG1568" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1569" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1571" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1573" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1575" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1577" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1579" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1581" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1583" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1585" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1587" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1589" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1591" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1540" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1567" class="apexcharts-datalabels" data:realIndex="1"></g></g><g id="SvgjsG1596" class="apexcharts-grid-borders"><line id="SvgjsLine1597" x1="0" y1="0" x2="411" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1603" x1="0" y1="0" x2="411" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1604" x1="0" y1="0" x2="411" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1605" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1606" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1608" font-family="Helvetica, Arial, sans-serif" x="17.125" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1609">Jan</tspan><title>Jan</title></text><text id="SvgjsText1611" font-family="Helvetica, Arial, sans-serif" x="51.375" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1612">Feb</tspan><title>Feb</title></text><text id="SvgjsText1614" font-family="Helvetica, Arial, sans-serif" x="85.625" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1615">Mar</tspan><title>Mar</title></text><text id="SvgjsText1617" font-family="Helvetica, Arial, sans-serif" x="119.875" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1618">Apr</tspan><title>Apr</title></text><text id="SvgjsText1620" font-family="Helvetica, Arial, sans-serif" x="154.125" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1621">May</tspan><title>May</title></text><text id="SvgjsText1623" font-family="Helvetica, Arial, sans-serif" x="188.375" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1624">Jun</tspan><title>Jun</title></text><text id="SvgjsText1626" font-family="Helvetica, Arial, sans-serif" x="222.625" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1627">Jul</tspan><title>Jul</title></text><text id="SvgjsText1629" font-family="Helvetica, Arial, sans-serif" x="256.875" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1630">Aug</tspan><title>Aug</title></text><text id="SvgjsText1632" font-family="Helvetica, Arial, sans-serif" x="291.125" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1633">Sep</tspan><title>Sep</title></text><text id="SvgjsText1635" font-family="Helvetica, Arial, sans-serif" x="325.375" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1636">Oct</tspan><title>Oct</title></text><text id="SvgjsText1638" font-family="Helvetica, Arial, sans-serif" x="359.625" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1639">Nov</tspan><title>Nov</title></text><text id="SvgjsText1641" font-family="Helvetica, Arial, sans-serif" x="393.875" y="224.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1642">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1644" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1645" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1646" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(76, 78, 231);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(14, 165, 233);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-5 lg:grid-cols-2">
              <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                <div class="flex justify-between space-x-1">
                  <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                    $67.6k
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary dark:text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <p class="mt-1 text-xs+">Income</p>
              </div>
              <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                <div class="flex justify-between">
                  <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                    12.6K
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                  </svg>
                </div>
                <p class="mt-1 text-xs+">Completed</p>
              </div>
              <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                <div class="flex justify-between">
                  <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                    143
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <p class="mt-1 text-xs+">Pending</p>
              </div>
              <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                <div class="flex justify-between">
                  <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                    651
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                  </svg>
                </div>
                <p class="mt-1 text-xs+">Dispatch</p>
              </div>
              <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                <div class="flex justify-between space-x-1">
                  <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                    46k
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                  </svg>
                </div>
                <p class="mt-1 text-xs+">Products</p>
              </div>
              <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                <div class="flex justify-between">
                  <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                    8.8k
                  </p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-error" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                  </svg>
                </div>
                <p class="mt-1 text-xs+">Customers</p>
              </div>
            </div>
          </div>
          <div class="card col-span-12 lg:col-span-8">
            <div class="flex items-center justify-between py-3 px-4">
              <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                Projects Status
              </h2>
              <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                  </svg>
                </button>

                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'" style="position: fixed; inset: auto 0px 0px auto; margin: 0px; transform: translate(-32px, -47px);" data-popper-placement="top-end">
                  <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                    <ul>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                      </li>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                      </li>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid grid-cols-1 gap-y-4 pb-3 sm:grid-cols-3">
              <div class="flex flex-col justify-between border-4 border-transparent border-l-info px-4">
                <div>
                  <p class="text-base font-medium text-slate-600 dark:text-navy-100">
                    Web Design
                  </p>
                  <p class="text-xs text-slate-400 dark:text-navy-300">
                    Design Learn Management System
                  </p>
                  <div class="badge mt-2 bg-info/10 text-info dark:bg-info/15">
                    UI/UX Design
                  </div>
                </div>
                <div>
                  <div class="mt-8">
                    <p class="font-inter">
                      <span class="text-2xl font-medium text-slate-600 dark:text-navy-100">%55.</span><span class="text-xs">23</span>
                    </p>
                    <p class="mt-1 text-xs">June 08, 2021</p>
                  </div>
                  <div class="mt-8 flex items-center justify-between space-x-2">
                    <div class="flex -space-x-3">
                      <div class="avatar h-8 w-8 hover:z-10">
                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-16.jpg" alt="avatar">
                      </div>
                      <div class="avatar h-8 w-8 hover:z-10">
                        <div class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                          jd
                        </div>
                      </div>
                      <div class="avatar h-8 w-8 hover:z-10">
                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-20.jpg" alt="avatar">
                      </div>
                    </div>
                    <button class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="flex flex-col justify-between border-4 border-transparent border-l-secondary px-4">
                <div>
                  <p class="text-base font-medium text-slate-600 dark:text-navy-100">
                    Mobile App
                  </p>
                  <p class="text-xs text-slate-400 dark:text-navy-300">
                    Ecommerce Application
                  </p>
                  <div class="badge mt-2 bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                    Ecommerce
                  </div>
                </div>
                <div>
                  <div class="mt-8">
                    <p class="font-inter">
                      <span class="text-2xl font-medium text-slate-600 dark:text-navy-100">%14.</span><span class="text-xs">84</span>
                    </p>
                    <p class="mt-1 text-xs">May 01, 2021</p>
                  </div>
                  <div class="mt-8 flex items-center justify-between space-x-2">
                    <div class="flex -space-x-3">
                      <div class="avatar h-8 w-8 hover:z-10">
                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-16.jpg" alt="avatar">
                      </div>
                      <div class="avatar h-8 w-8 hover:z-10">
                        <div class="is-initial rounded-full bg-success text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                          uh
                        </div>
                      </div>
                      <div class="avatar h-8 w-8 hover:z-10">
                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-14.jpg" alt="avatar">
                      </div>
                    </div>
                    <button class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="flex flex-col justify-between border-4 border-transparent border-l-warning px-4">
                <div>
                  <p class="text-base font-medium text-slate-600 dark:text-navy-100">
                    Design System
                  </p>
                  <p class="text-xs text-slate-400 dark:text-navy-300">
                    Create LMS design system on figma
                  </p>
                  <div class="mt-2 flex space-x-1.5">
                    <div class="badge bg-warning/10 text-warning dark:bg-warning/15">
                      LMS
                    </div>
                    <div class="badge bg-warning/10 text-warning dark:bg-warning/15">
                      Figma
                    </div>
                  </div>
                </div>
                <div>
                  <div class="mt-8">
                    <p class="font-inter">
                      <span class="text-2xl font-medium text-slate-600 dark:text-navy-100">%87.</span><span class="text-xs">40</span>
                    </p>
                    <p class="mt-1 text-xs">September 16, 2021</p>
                  </div>
                  <div class="mt-8 flex items-center justify-between space-x-2">
                    <div class="flex -space-x-3">
                      <div class="avatar h-8 w-8 hover:z-10">
                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-11.jpg" alt="avatar">
                      </div>
                      <div class="avatar h-8 w-8 hover:z-10">
                        <div class="is-initial rounded-full bg-error text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                          pm
                        </div>
                      </div>
                      <div class="avatar h-8 w-8 hover:z-10">
                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/avatar/avatar-10.jpg" alt="avatar">
                      </div>
                    </div>
                    <button class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <div class="flex items-center justify-between">
              <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                Customer Satisfaction
              </h2>
              <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                  </svg>
                </button>

                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'" style="position: fixed; inset: auto 0px 0px auto; margin: 0px; transform: translate(-16px, 269px);" data-popper-placement="top-end" data-popper-reference-hidden="" data-popper-escaped="">
                  <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                    <ul>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                      </li>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                      </li>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-3">
              <p>
                <span class="text-3xl text-slate-700 dark:text-navy-100">9.7</span>
                <span class="text-xs text-success">+2.1%</span>
              </p>
              <p class="text-xs+">Performance score</p>
            </div>
            <div class="mt-4 flex h-2 space-x-1">
              <div class="w-5/12 rounded-full bg-primary dark:bg-accent" x-tooltip.primary="'Exellent'"></div>
              <div class="w-2/12 rounded-full bg-success" x-tooltip.success="'Very Good'"></div>
              <div class="w-2/12 rounded-full bg-info" x-tooltip.info="'Good'"></div>

              <div class="w-2/12 rounded-full bg-warning" x-tooltip.warning="'Poor'"></div>
              <div class="w-1/12 rounded-full bg-error" x-tooltip.error="'Very Poor'"></div>
            </div>

            <div class="is-scrollbar-hidden mt-4 min-w-full overflow-x-auto">
              <table class="w-full font-inter">
                <tbody>
                  <tr>
                    <td class="whitespace-nowrap py-2">
                      <div class="flex items-center space-x-2">
                        <div class="h-3.5 w-3.5 rounded-full border-2 border-primary dark:border-accent"></div>
                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                          Exellent
                        </p>
                      </div>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">
                      <p class="font-medium text-slate-700 dark:text-navy-100">
                        1 029
                      </p>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">42%</td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-2">
                      <div class="flex items-center space-x-2">
                        <div class="h-3.5 w-3.5 rounded-full border-2 border-success"></div>
                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                          Very Good
                        </p>
                      </div>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">
                      <p class="font-medium text-slate-700 dark:text-navy-100">
                        426
                      </p>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">18%</td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-2">
                      <div class="flex items-center space-x-2">
                        <div class="h-3.5 w-3.5 rounded-full border-2 border-info"></div>
                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                          Good
                        </p>
                      </div>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">
                      <p class="font-medium text-slate-700 dark:text-navy-100">
                        326
                      </p>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">14%</td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-2">
                      <div class="flex items-center space-x-2">
                        <div class="h-3.5 w-3.5 rounded-full border-2 border-warning"></div>
                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                          Poor
                        </p>
                      </div>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">
                      <p class="font-medium text-slate-700 dark:text-navy-100">
                        395
                      </p>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">17%</td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-2">
                      <div class="flex items-center space-x-2">
                        <div class="h-3.5 w-3.5 rounded-full border-2 border-error"></div>
                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                          Very Poor
                        </p>
                      </div>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">
                      <p class="font-medium text-slate-700 dark:text-navy-100">
                        129
                      </p>
                    </td>
                    <td class="whitespace-nowrap py-2 text-right">9%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
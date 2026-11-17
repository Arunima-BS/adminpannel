@extends('layouts.admin.master')

@section('content')
  <!-- STAT CARDS ROW -->
  <div class="stats-row">
    <!-- Card 1 -->
    <div class="stat-card">
      <div class="stat-title">Daily Sales</div>
      <div class="stat-data">
        <div class="stat-value up"><i class="fas fa-arrow-up"></i> $249.95</div>
        <div class="stat-percent">67%</div>
      </div>
      <div class="progress-bar-container">
        <div class="progress-bar up-bar" style="width: 67%;"></div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="stat-card">
      <div class="stat-title">Monthly Sales</div>
      <div class="stat-data">
        <div class="stat-value down"><i class="fas fa-arrow-down"></i> $2,942.32</div>
        <div class="stat-percent">36%</div>
      </div>
      <div class="progress-bar-container">
        <div class="progress-bar down-bar" style="width: 36%;"></div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="stat-card">
      <div class="stat-title">Yearly Sales</div>
      <div class="stat-data">
        <div class="stat-value up"><i class="fas fa-arrow-up"></i> $8,638.32</div>
        <div class="stat-percent">80%</div>
      </div>
      <div class="progress-bar-container">
        <div class="progress-bar up-bar" style="width: 80%;"></div>
      </div>
    </div>
  </div>

  <!-- BOTTOM GRID ROW -->
  <div class="content-row">
    
    <!-- MAP SECTION -->
    <div class="map-card">
      <div class="card-header">
        <h3>Users From United States</h3>
      </div>
      <div class="map-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg" alt="World Map" class="map-img" />
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="right-column">
      
      <!-- EARNINGS BLUE CARD -->
      <div class="earnings-card">
        <div class="earnings-header">Earnings</div>
        <div class="earnings-value">$4295.36 <i class="fas fa-arrow-up"></i></div>
        <div class="earnings-sub">TOTAL EARNINGS</div>
        
        <!-- SVG Line Chart -->
        <div class="chart-container">
          <svg viewBox="0 0 300 120" preserveAspectRatio="none" class="line-chart">
            <polyline fill="none" stroke="white" stroke-width="2" points="10,80 60,40 110,90 160,50 210,110 260,40 290,60" />
            <circle cx="10" cy="80" r="3" fill="white" />
            <circle cx="60" cy="40" r="3" fill="white" />
            <circle cx="110" cy="90" r="3" fill="white" />
            <circle cx="160" cy="50" r="3" fill="white" />
            <circle cx="210" cy="110" r="3" fill="white" />
            <circle cx="260" cy="40" r="3" fill="white" />
            <circle cx="290" cy="60" r="3" fill="white" />
          </svg>
          <div class="chart-labels">
            <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span>
          </div>
        </div>
      </div>

      <!-- TOTAL IDEAS CARD -->
      <div class="ideas-card">
        <div class="ideas-icon"><i class="fas fa-bolt"></i></div>
        <div class="ideas-data">
          <div class="ideas-value">235</div>
          <div class="ideas-label">TOTAL IDEAS</div>
        </div>
      </div>

    </div>
  </div>
@endsection
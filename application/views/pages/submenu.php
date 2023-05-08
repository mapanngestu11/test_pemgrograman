	<ul class="nav nav-primary">
		<li class="nav-item">
			<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
				<i class="fas fa-home"></i>
				<p>Dashboard</p>
				<span class="caret"></span>
			</a>
			<div class="collapse" id="dashboard">
				<ul class="nav nav-collapse">
					<li>
						<a href="../../demo1/index.html">
							<span class="sub-item">Dashboard 1</span>
						</a>
					</li>
					<li>
						<a href="../../demo2/index.html">
							<span class="sub-item">Dashboard 2</span>
						</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-section">
			<span class="sidebar-mini-icon">
				<i class="fa fa-ellipsis-h"></i>
			</span>
			<h4 class="text-section">Tes Pemrograman</h4>
		</li>
		<li class="nav-item active">
			<a data-toggle="collapse" href="#base">
				<i class="fas fa-users"></i>
				<p>Data Nasabah</p>
				<span class="caret"></span>
			</a>
			<div class="collapse" id="base">
				<ul class="nav nav-collapse">
					<li>
						<a href="<?php echo base_url('Nasabah/') ?>">
							<span class="sub-item">Lihat</span>
						</a>
					</li>

				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a data-toggle="collapse" href="#transaksi">
				<i class="fas fa-folder"></i>
				<p>Data Transaksi</p>
				<span class="caret"></span>
			</a>
			<div class="collapse" id="transaksi">
				<ul class="nav nav-collapse">
					<li>
						<a href="<?php echo base_url('Transaksi/') ?>">
							<span class="sub-item">Lihat</span>
						</a>
					</li>

				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a data-toggle="collapse" href="#poin">
				<i class="fas fa-folder"></i>
				<p>Data Poin</p>
				<span class="caret"></span>
			</a>
			<div class="collapse" id="poin">
				<ul class="nav nav-collapse">
					<li>
						<a href="<?php echo base_url('Poin/') ?>">
							<span class="sub-item">Lihat</span>
						</a>
					</li>

				</ul>
			</div>
		</li>


	</ul>
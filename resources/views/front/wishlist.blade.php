<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
		/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Wishlist - Glowing - Bootstrap 5 HTML Templates</title>
		<link rel="icon" href="{{ asset('assets/front/images/others/favicon.ico') }}" />

		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/lightgallery/css/lightgallery-bundle.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/fontawesome/css/all.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/animate/animate.min.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('assets/front/vendors/slick/slick.css') }}" />
		<link
			rel="stylesheet"
			href="{{ asset('assets/front/vendors/mapbox-gl/mapbox-gl.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="{{ asset('assets/front/css/theme.css') }}" />
	</head>

	<body>
		<header
			id="header"
			class="header header-sticky header-sticky-smart disable-transition-all z-index-5"
		>
			<div class="topbar bg-primary">
				<div class="container-wide container">
					<p class="mb-0 text-white text-center p-4 fs-6 fw-semibold">
						Free shipping on all U.S. orders $50+
					</p>
				</div>
			</div>
			<div class="header-above">
				<div class="container-xxl container d-none d-xl-block">
					<div class="pt-8 d-flex">
						<div
							class="icons-actions d-flex justify-content-start w-xl-50 fs-28px text-body-emphasis"
						>
							<form
								action="#"
								method="get"
								class="search-box-2 w-60"
							>
								<div class="position-relative">
									<input
										type="text"
										name="s"
										class="form-control form-control bg-transparent pe-12 lh-1 py-5"
										placeholder="Search product"
									/>
									<button
										class="position-absolute pos-fixed-right-center bg-transparent border-0 px-0 fs-4 px-6 top-0 bottom-0 end-0 my-auto z-index-3 text-body-emphasis"
										type="submit"
									>
										<svg class="icon fs-18px mt-n3">
											<use xlink:href="#search"></use>
										</svg>
									</button>
								</div>
							</form>
						</div>

						<a
							href="../index.html"
							class="navbar-brand px-8 py-4 mx-auto"
						>
							<img
								class="light-mode-img"
								src="{{ asset('assets/front/images/others/logo.png') }}"
								width="179"
								height="26"
								alt="Glowing - Bootstrap 5 HTML Templates" />
							<img
								class="dark-mode-img"
								src="{{ asset('assets/front/images/others/logo-white.png') }}"
								width="179"
								height="26"
								alt="Glowing - Bootstrap 5 HTML Templates"
						/></a>

						<div
							class="icons-actions d-flex justify-content-end w-xl-50 fs-28px text-body-emphasis"
						>
							<div class="px-5 d-none d-xl-inline-block">
								<a
									class="lh-1 color-inherit text-decoration-none"
									href="#"
									data-bs-toggle="modal"
									data-bs-target="#signInModal"
								>
									<svg class="icon icon-user-light">
										<use
											xlink:href="#icon-user-light"
										></use>
									</svg>
								</a>
							</div>
							<div class="px-5 d-none d-xl-inline-block">
								<a
									class="position-relative lh-1 color-inherit text-decoration-none"
									href="../shop/wishlist.html"
								>
									<svg class="icon icon-star-light">
										<use
											xlink:href="#icon-star-light"
										></use>
									</svg>
									<span
										class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
										style="--square-size: 18px"
										>3</span
									>
								</a>
							</div>
							<div class="px-5 d-none d-xl-inline-block">
								<a
									class="position-relative lh-1 color-inherit text-decoration-none"
									href="#"
									data-bs-toggle="offcanvas"
									data-bs-target="#shoppingCart"
									aria-controls="shoppingCart"
									aria-expanded="false"
								>
									<svg class="icon icon-star-light">
										<use
											xlink:href="#icon-shopping-bag-open-light"
										></use>
									</svg>
									<span
										class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
										style="--square-size: 18px"
										>3</span
									>
								</a>
							</div>

							<div class="px-5 d-none d-xl-inline-block">
								<a
									class="lh-1 color-inherit text-decoration-none"
									href="../shop/compare.html"
								>
									<svg
										class="icon icon-arrows-left-right-light"
									>
										<use
											xlink:href="#icon-arrows-left-right-light"
										></use>
									</svg>
								</a>
							</div>

							<div class="color-modes position-relative ps-5">
								<a
									class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
									href="#"
									aria-expanded="true"
									data-bs-toggle="dropdown"
									data-bs-display="static"
									aria-label="Toggle theme (light)"
								>
									<svg class="bi my-1 theme-icon-active">
										<use href="#sun-fill"></use>
									</svg>
								</a>
								<ul
									class="dropdown-menu dropdown-menu-end fs-14px"
									data-bs-popper="static"
								>
									<li>
										<button
											type="button"
											class="dropdown-item d-flex align-items-center active"
											data-bs-theme-value="light"
											aria-pressed="true"
										>
											<svg
												class="bi me-4 opacity-50 theme-icon"
											>
												<use href="#sun-fill"></use>
											</svg>
											Light
											<svg class="bi ms-auto d-none">
												<use href="#check2"></use>
											</svg>
										</button>
									</li>
									<li>
										<button
											type="button"
											class="dropdown-item d-flex align-items-center"
											data-bs-theme-value="dark"
											aria-pressed="false"
										>
											<svg
												class="bi me-4 opacity-50 theme-icon"
											>
												<use
													href="#moon-stars-fill"
												></use>
											</svg>
											Dark
											<svg class="bi ms-auto d-none">
												<use href="#check2"></use>
											</svg>
										</button>
									</li>
									<li>
										<button
											type="button"
											class="dropdown-item d-flex align-items-center"
											data-bs-theme-value="auto"
											aria-pressed="false"
										>
											<svg
												class="bi me-4 opacity-50 theme-icon"
											>
												<use href="#circle-half"></use>
											</svg>
											Auto
											<svg class="bi ms-auto d-none">
												<use href="#check2"></use>
											</svg>
										</button>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-area">
				<div
					class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-6 py-xl-0"
				>
					<div class="container-xxl container">
						<div class="d-flex d-xl-none w-100">
							<div class="w-72px d-flex d-xl-none">
								<button
									class="navbar-toggler align-self-center border-0 shadow-none px-0 canvas-toggle p-4"
									type="button"
									data-bs-toggle="offcanvas"
									data-bs-target="#offCanvasNavBar"
									aria-controls="offCanvasNavBar"
									aria-expanded="false"
									aria-label="Toggle Navigation"
								>
									<span class="fs-24 toggle-icon"></span>
								</button>
							</div>

							<div class="d-flex mx-auto">
								<a
									href="../index.html"
									class="navbar-brand px-8 py-4 mx-auto"
								>
									<img
										class="light-mode-img"
										src="{{ asset('assets/front/images/others/logo.png') }}"
										width="129"
										height="20"
										alt="Glowing - Bootstrap 5 HTML Templates" />
									<img
										class="dark-mode-img"
										src="{{ asset('assets/front/images/others/logo-white.png') }}"
										width="129"
										height="20"
										alt="Glowing - Bootstrap 5 HTML Templates"
								/></a>
							</div>
							<div
								class="icons-actions d-flex justify-content-end w-xl-50 fs-28px text-body-emphasis w-72px"
							>
								<div class="px-xl-5 d-inline-block">
									<a
										class="lh-1 color-inherit text-decoration-none"
										href="#"
										data-bs-toggle="offcanvas"
										data-bs-target="#searchModal"
										aria-controls="searchModal"
										aria-expanded="false"
									>
										<svg
											class="icon icon-magnifying-glass-light"
										>
											<use
												xlink:href="#icon-magnifying-glass-light"
											></use>
										</svg>
									</a>
								</div>

								<div class="color-modes position-relative ps-5">
									<a
										class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
										href="#"
										aria-expanded="true"
										data-bs-toggle="dropdown"
										data-bs-display="static"
										aria-label="Toggle theme (light)"
									>
										<svg class="bi my-1 theme-icon-active">
											<use href="#sun-fill"></use>
										</svg>
									</a>
									<ul
										class="dropdown-menu dropdown-menu-end fs-14px"
										data-bs-popper="static"
									>
										<li>
											<button
												type="button"
												class="dropdown-item d-flex align-items-center active"
												data-bs-theme-value="light"
												aria-pressed="true"
											>
												<svg
													class="bi me-4 opacity-50 theme-icon"
												>
													<use href="#sun-fill"></use>
												</svg>
												Light
												<svg class="bi ms-auto d-none">
													<use href="#check2"></use>
												</svg>
											</button>
										</li>
										<li>
											<button
												type="button"
												class="dropdown-item d-flex align-items-center"
												data-bs-theme-value="dark"
												aria-pressed="false"
											>
												<svg
													class="bi me-4 opacity-50 theme-icon"
												>
													<use
														href="#moon-stars-fill"
													></use>
												</svg>
												Dark
												<svg class="bi ms-auto d-none">
													<use href="#check2"></use>
												</svg>
											</button>
										</li>
										<li>
											<button
												type="button"
												class="dropdown-item d-flex align-items-center"
												data-bs-theme-value="auto"
												aria-pressed="false"
											>
												<svg
													class="bi me-4 opacity-50 theme-icon"
												>
													<use
														href="#circle-half"
													></use>
												</svg>
												Auto
												<svg class="bi ms-auto d-none">
													<use href="#check2"></use>
												</svg>
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div
							class="w-100 d-none d-xl-flex align-items-center justify-content-center"
						>
							<ul class="navbar-nav">
								<li
									class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth"
								>
									<a
										class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
										href="../index.html"
										id="menu-item-home"
										aria-haspopup="true"
										aria-expanded="false"
										>Ana Səhifə</a
									>
								</li>
								<li
									class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth position-static"
								>
									<a
										class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
										href="../shop/shop-layout-v2.html"
										id="menu-item-shop"
										aria-haspopup="true"
										aria-expanded="false"
										>Məhsullar</a
									>
								</li>
								<li
									class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover"
								>
									<a
										class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
										href="../blog/list.html"
										id="menu-item-pages"
										aria-haspopup="true"
										aria-expanded="false"
										>Blog</a
									>
								</li>
								<li
									class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth"
								>
									<a
										class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
										href="../about-us-02.html"
										id="menu-item-blocks"
										aria-haspopup="false"
										aria-expanded="false"
										>Haqqımızda</a
									>
								</li>
								<li
									class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth"
								>
									<a
										class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
										href="../contact-us-01.html"
										id="menu-item-docs"
										aria-haspopup="true"
										aria-expanded="false"
										>Əlaqə</a
									>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<main id="content" class="wrapper layout-page">
			<section class="z-index-2 position-relative pb-2 mb-12">
				<div class="bg-body-secondary mb-3">
					<div class="container">
						<nav class="py-4 lh-30px" aria-label="breadcrumb">
							<ol
								class="breadcrumb justify-content-center py-1 mb-0"
							>
								<li class="breadcrumb-item">
									<a title="Home" href="../index.html"
										>Home</a
									>
								</li>
								<li class="breadcrumb-item">
									<a
										title="Shop"
										href="../shop/shop-layout-v2.html"
										>Shop</a
									>
								</li>
								<li
									class="breadcrumb-item active"
									aria-current="page"
								>
									Wishlist
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</section>
			<section class="container container-xxl mb-13 mb-lg-15">
				<div class="text-center"><h2 class="mb-13">Wishlist</h2></div>

				<form class="table-responsive-md">
					<table class="table" style="min-width: 710px">
						<tbody>
							<tr class="border">
								<th
									scope="row"
									class="ps-xl-10 py-6 d-flex align-items-center border-0"
								>
									<a
										href="#"
										class="d-block text-muted fw-lighter"
										><i class="fas fa-times"></i
									></a>
									<div class="d-flex align-items-center">
										<div class="ms-6 me-7">
											<img
												src="#"
												data-src="{{ asset('assets/front/images/products/product-03-75x100.jpg') }}"
												class="img-fluid lazy-image"
												height="100"
												width="75"
												alt=""
											/>
										</div>
										<div>
											<p
												class="text-body-emphasis fw-semibold mb-5"
											>
												Natural Coconut Cleansing Oil
											</p>
											<p
												class="fw-bold fs-14px mb-4 text-body-emphasis"
											>
												<span
													class="fw-normal fs-13px text-decoration-line-through text-secondary pe-3"
													>$39.00</span
												>
												<span>$29.00</span>
											</p>
											<p
												class="mb-0 text-secondary fw-normal"
											>
												August 14, 2021
											</p>
										</div>
									</div>
								</th>
								<td class="align-middle text-end pe-10">
									<span class="me-6">In stock</span>
									<a
										href="#"
										class="btn fs-15px px-9 lh-sm btn-outline-dark"
										>Add To Cart</a
									>
								</td>
							</tr>

							<tr class="border">
								<th
									scope="row"
									class="ps-xl-10 py-6 d-flex align-items-center border-0"
								>
									<a
										href="#"
										class="d-block text-muted fw-lighter"
										><i class="fas fa-times"></i
									></a>
									<div class="d-flex align-items-center">
										<div class="ms-6 me-7">
											<img
												src="#"
												data-src="{{ asset('assets/front/images/products/product-09-75x100.jpg') }}"
												class="img-fluid lazy-image"
												height="100"
												width="75"
												alt=""
											/>
										</div>
										<div>
											<p
												class="text-body-emphasis fw-semibold mb-5"
											>
												Cleansing Balm
											</p>
											<p
												class="fw-bold fs-14px mb-4 text-body-emphasis"
											>
												<span
													class="fw-normal fs-13px text-decoration-line-through text-secondary pe-3"
													>$39.00</span
												>
												<span>$29.00</span>
											</p>
											<p
												class="mb-0 text-secondary fw-normal"
											>
												August 14, 2021
											</p>
										</div>
									</div>
								</th>
								<td class="align-middle text-end pe-10">
									<span class="me-6">In stock</span>
									<a
										href="#"
										class="btn fs-15px px-9 lh-sm btn-outline-dark"
										>Select Options</a
									>
								</td>
							</tr>

							<tr class="border">
								<th
									scope="row"
									class="ps-xl-10 py-6 d-flex align-items-center border-0"
								>
									<a
										href="#"
										class="d-block text-muted fw-lighter"
										><i class="fas fa-times"></i
									></a>
									<div class="d-flex align-items-center">
										<div class="ms-6 me-7">
											<img
												src="#"
												data-src="{{ asset('assets/front/images/products/product-06-75x100.jpg') }}"
												class="img-fluid lazy-image"
												height="100"
												width="75"
												alt=""
											/>
										</div>
										<div>
											<p
												class="text-body-emphasis fw-semibold mb-5"
											>
												Super Pure
											</p>
											<p
												class="fw-bold fs-14px mb-4 text-body-emphasis"
											>
												<span
													class="fw-normal fs-13px text-decoration-line-through text-secondary pe-3"
													>$39.00</span
												>
												<span>$29.00</span>
											</p>
											<p
												class="mb-0 text-secondary fw-normal"
											>
												August 14, 2021
											</p>
										</div>
									</div>
								</th>
								<td class="align-middle text-end pe-10">
									<span class="me-6">In stock</span>
									<a
										href="#"
										class="btn fs-15px px-9 lh-sm btn-outline-dark"
										>Add To Cart</a
									>
								</td>
							</tr>

							<tr>
								<td class="border-0 py-8 px-0">
									<a
										data-bs-toggle="modal"
										data-bs-target="#continueShoppingModal"
										href="#"
										type="submit"
										class="btn px-9 btn-outline-dark"
									>
										Countinue Shopping
									</a>
								</td>
								<td class="border-0 text-end py-8 px-0">
									<button
										type="submit"
										class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary text-light"
									>
										Update Cart
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
				<div
					class="modal"
					id="continueShoppingModal"
					tabindex="-1"
					aria-labelledby="continueShoppingModal"
					aria-hidden="true"
				>
					<div
						class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
					>
						<div class="modal-content">
							<div class="modal-header text-center border-0 pb-0">
								<button
									type="button"
									class="btn-close position-absolute end-5 top-5"
									data-bs-dismiss="modal"
									aria-label="Close"
								></button>
								<h3
									class="modal-title w-100"
									id="signInModalLabel"
								>
									Sent A Message
								</h3>
							</div>
							<div class="modal-body px-sm-13 px-8">
								<form action="#">
									<input
										name="name"
										type="text"
										class="form-control mb-5"
										placeholder="Your Name"
										required
									/>
									<input
										name="name"
										type="text"
										class="form-control mb-5"
										placeholder="Your Surname"
										required
									/>
									<input
										name="number"
										type="number"
										class="form-control mb-5"
										placeholder="Your Number"
										required
									/>
									<input
										name="email"
										type="email"
										class="form-control mb-5"
										placeholder="Your Email"
										required
									/>
									<input
										name="address"
										type="text"
										class="form-control mb-5"
										placeholder="Your Address"
										required
									/>
									<textarea
										class="form-control mb-6 input-focus"
										placeholder="Messenger"
										rows="7"
									></textarea>
									<button
										type="submit"
										value="Login"
										class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary w-100"
									>
										Submit
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="pt-15 pt-lg-20 pb-16 footer bg-section-4">
			<div class="container container-xxl pt-4">
				<div class="row">
					<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0 fs-14px">
						<h3 class="fs-5 mb-6">Company</h3>

						<p class="pe-xl-18 lh-2">
							Find a location nearest you. See
							<a class="" href="#"
								><u class="fw-medium">Our Stores</u></a
							>
						</p>
						<p class="mb-0 lh-2">
							<strong class="text-body-emphasis"
								>+391 (0)35 2568 4593</strong
							>
							<br />
							hello@domain.com
						</p>
					</div>
					<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0">
						<h3 class="fs-5 mb-6">Useful links</h3>

						<ul class="list-unstyled mb-0 fw-medium">
							<li class="pt-3 mb-4">
								<a
									href="#"
									title="New Products"
									class="text-body"
									>New Products</a
								>
							</li>

							<li class="pt-3 mb-4">
								<a
									href="#"
									title="Best Sellers"
									class="text-body"
									>Best Sellers</a
								>
							</li>

							<li class="pt-3 mb-4">
								<a
									href="#"
									title="Bundle &amp; Save"
									class="text-body"
									>Bundle &amp; Save</a
								>
							</li>

							<li class="pt-3 mb-4">
								<a
									href="#"
									title="Online Gift Card"
									class="text-body"
									>Online Gift Card</a
								>
							</li>
						</ul>
					</div>
					<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0">
						<h3 class="fs-5 mb-6">Information</h3>

						<ul class="list-unstyled mb-0 fw-medium">
							<li class="pt-3 mb-4">
								<a
									href="#"
									title="Start a Return"
									class="text-body"
									>Start a Return</a
								>
							</li>

							<li class="pt-3 mb-4">
								<a href="#" title="Contact Us" class="text-body"
									>Contact Us</a
								>
							</li>

							<li class="pt-3 mb-4">
								<a
									href="../faqs.html"
									title="Shipping FAQ"
									class="text-body"
									>Shipping FAQ</a
								>
							</li>

							<li class="pt-3 mb-4">
								<a
									href="#"
									title="Terms &amp; Conditions"
									class="text-body"
									>Terms &amp; Conditions</a
								>
							</li>

							<li class="pt-3 mb-4">
								<a
									href="#"
									title="Privacy Policy"
									class="text-body"
									>Privacy Policy</a
								>
							</li>
						</ul>
					</div>
					<div class="col-lg-5 col-12 mb-11 mb-lg-0">
						<h3 class="mb-4">Good emails.</h3>
						<p class="lh-2">
							Enter your email below to be the first to know about
							new collections and product launches.
						</p>
						<form class="pt-8">
							<div class="d-flex">
								<input
									type="email"
									class="form-control bg-body rounded-left"
									placeholder="Enter your email address"
								/>
								<button
									type="submit"
									class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary ms-0"
								>
									Subscribe
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="row align-items-center mt-0 mt-lg-20 pt-lg-4">
					<div
						class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-center order-2 order-lg-1 fs-6 mt-8 mt-lg-0"
					>
						<p class="mb-0">© Glowing 2023</p>
						<ul class="list-inline fs-18px ms-6 mb-0">
							<li class="list-inline-item me-8">
								<a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item me-8">
								<a href="#"
									><i class="fab fa-facebook-f"></i
								></a>
							</li>
							<li class="list-inline-item me-8">
								<a href="#"><i class="fab fa-instagram"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fab fa-youtube"></i></a>
							</li>
						</ul>
					</div>
					<div
						class="col-sm-12 col-lg-4 text-md-center order-1 order-lg-2"
					>
						<a class="d-inline-block" href="../">
							<img
								class="lazy-image img-fluid light-mode-img"
								src="#"
								data-src="{{ asset('assets/front/images/others/logo.png') }}"
								width="179"
								height="26"
								alt="Glowing - Bootstrap 5 HTML Templates"
							/>
							<img
								class="lazy-image dark-mode-img img-fluid"
								src="#"
								data-src="{{ asset('assets/front/images/others/logo-white.png') }}"
								width="179"
								height="26"
								alt="Glowing - Bootstrap 5 HTML Templates"
							/>
						</a>
					</div>
					<div
						class="col-sm-12 col-md-6 col-lg-4 order-3 text-sm-start text-lg-end mt-8 mt-lg-0"
					>
						<img
							src="#"
							data-src="{{ asset('assets/front/images/footer/img_1.png') }}"
							width="313"
							height="28"
							alt="Paypal"
							class="img-fluid lazy-image"
						/>
					</div>
				</div>
			</div>
		</footer>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<script src="{{ asset('assets/front/vendors/bootstrap/js/bootstrap.bundle.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/clipboard/clipboard.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/vanilla-lazyload/lazyload.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/waypoints/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/lightgallery/lightgallery.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/lightgallery/plugins/zoom/lg-zoom.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/lightgallery/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/lightgallery/plugins/video/lg-video.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/lightgallery/plugins/vimeoThumbnail/lg-vimeo-thumbnail.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/isotope/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/slick/slick.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/gsap/gsap.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/gsap/ScrollToPlugin.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/gsap/ScrollTrigger.min.js') }}"></script>
		<script src="{{ asset('assets/front/vendors/mapbox-gl/mapbox-gl.js') }}"></script>
		<script src="{{ asset('assets/front/js/theme.min.js') }}"></script>

		<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
			<symbol id="icon-bedroom" viewBox="0 0 46 32">
				<path
					d="M44.421 15.217v-9.803c0-2.985-2.428-5.414-5.414-5.414h-31.82c-2.985 0-5.414 2.428-5.414 5.414v9.803c-1.080 0.86-1.775 2.185-1.775 3.67v4.872c0 2.587 2.105 4.692 4.692 4.692h2.406v1.744c0 0.997 0.808 1.805 1.805 1.805s1.805-0.808 1.805-1.805v-1.744h24.782v1.744c0 0.997 0.808 1.805 1.805 1.805s1.805-0.808 1.805-1.805v-1.744h2.406c2.587 0 4.692-2.104 4.692-4.692v-4.872c0-1.485-0.694-2.81-1.775-3.67zM7.188 3.609h31.82c0.995 0 1.805 0.81 1.805 1.805v8.782h-3.489v-3.489c0-1.99-1.619-3.609-3.609-3.609h-5.304c-1.99 0-3.609 1.619-3.609 3.609v3.489h-3.407v-3.489c0-1.99-1.619-3.609-3.609-3.609h-5.304c-1.99 0-3.609 1.619-3.609 3.609v3.489h-3.489v-8.782c0-0.995 0.81-1.805 1.805-1.805zM28.41 14.195v-3.489h5.304v3.489h-5.304zM12.481 14.195v-3.489h5.304v3.489h-5.304zM42.587 23.759c0 0.597-0.486 1.083-1.083 1.083h-36.812c-0.597 0-1.083-0.486-1.083-1.083v-4.872c0-0.597 0.486-1.083 1.083-1.083h36.812c0.597 0 1.083 0.486 1.083 1.083 0 0 0 4.872 0 4.872z"
				></path>
			</symbol>
			<symbol id="icon-garage" viewBox="0 0 37 32">
				<path
					d="M29.463 18.937h-1.601l-1.643-3.892c-0.62-1.467-2.014-2.415-3.553-2.415h-8.301c-1.539 0-2.934 0.948-3.553 2.415l-1.643 3.892h-1.601c-1.42 0-2.575 1.155-2.575 2.576v4.321c0 1.17 0.785 2.16 1.855 2.472v1.113c0 1.423 1.158 2.581 2.581 2.581h2.068c1.423 0 2.581-1.158 2.581-2.581v-1.009h8.875v1.009c0 1.423 1.158 2.581 2.581 2.581h2.068c1.423 0 2.581-1.158 2.581-2.581v-1.113c1.070-0.312 1.855-1.302 1.855-2.472v-4.321c-0-1.421-1.155-2.576-2.575-2.576zM14.365 14.843h8.301c0.648 0 1.243 0.418 1.516 1.063l1.28 3.031h-13.892l1.28-3.031c0.273-0.646 0.868-1.063 1.515-1.063zM29.463 21.149c0.2 0 0.364 0.163 0.364 0.364v4.321c0 0.201-0.163 0.364-0.364 0.364h-21.896c-0.2 0-0.364-0.163-0.364-0.364v-4.321c0-0.201 0.163-0.364 0.364-0.364h21.896zM11.866 29.418c0 0.204-0.166 0.37-0.369 0.37h-2.068c-0.204 0-0.37-0.166-0.37-0.37v-1.009h2.807v1.009zM27.971 29.418c0 0.204-0.166 0.37-0.369 0.37h-2.068c-0.204 0-0.37-0.166-0.37-0.37v-1.009h2.807v1.009z"
				></path>
				<path
					d="M14.843 24.779h7.346c0.611 0 1.106-0.495 1.106-1.106s-0.495-1.106-1.106-1.106h-7.346c-0.611 0-1.106 0.495-1.106 1.106s0.495 1.106 1.106 1.106z"
				></path>
				<path
					d="M26.393 24.779c0.578 0 1.133-0.509 1.106-1.106-0.027-0.599-0.486-1.106-1.106-1.106-0.579 0-1.133 0.509-1.106 1.106 0.027 0.599 0.486 1.106 1.106 1.106z"
				></path>
				<path
					d="M10.638 24.779c0.579 0 1.133-0.509 1.106-1.106-0.027-0.599-0.486-1.106-1.106-1.106-0.579 0-1.133 0.509-1.106 1.106 0.027 0.599 0.486 1.106 1.106 1.106z"
				></path>
				<path
					d="M36.397 8.329l-17.409-8.223c-0.299-0.141-0.646-0.141-0.945 0l-17.409 8.223c-0.387 0.183-0.634 0.572-0.634 1v21.565c0 0.611 0.495 1.106 1.106 1.106s1.106-0.495 1.106-1.106v-20.864l16.303-7.7 16.303 7.7v20.864c0 0.611 0.495 1.106 1.106 1.106s1.106-0.495 1.106-1.106v-21.565c0-0.428-0.247-0.817-0.634-1z"
				></path>
			</symbol>
			<symbol id="icon-long-arrow" viewBox="0 0 156 32">
				<path
					d="M140.444 32c0.37 0 0.667-0.148 0.889-0.444l14.667-14.667c0.296-0.222 0.444-0.519 0.444-0.889s-0.148-0.667-0.444-0.889l-14.667-14.667c-0.222-0.296-0.519-0.444-0.889-0.444s-0.667 0.148-0.889 0.444l-2.222 2.111c-0.296 0.296-0.444 0.63-0.444 1s0.148 0.667 0.444 0.889l9 8.667h-145c-0.37 0-0.685 0.13-0.944 0.389s-0.389 0.574-0.389 0.944v3.111c0 0.37 0.13 0.685 0.389 0.944s0.574 0.389 0.944 0.389h145l-9 8.667c-0.296 0.222-0.444 0.519-0.444 0.889s0.148 0.704 0.444 1l2.222 2.111c0.222 0.296 0.519 0.444 0.889 0.444z"
				></path>
			</symbol>
			<symbol id="icon-shower" viewBox="0 0 32 32">
				<path
					d="M17.925 23.285c-0.036-0.519-0.486-0.91-1.004-0.874s-0.91 0.486-0.874 1.004l0.063 0.907c0.036 0.518 0.485 0.91 1.004 0.874s0.91-0.486 0.874-1.004l-0.063-0.907z"
				></path>
				<path
					d="M22.385 20.968c-0.21-0.476-0.765-0.691-1.241-0.481s-0.691 0.765-0.481 1.241l0.345 0.782c0.21 0.475 0.765 0.691 1.241 0.481s0.691-0.765 0.481-1.241l-0.345-0.782z"
				></path>
				<path
					d="M26.744 18.696c-0.359-0.376-0.954-0.39-1.331-0.032s-0.39 0.954-0.032 1.331l0.627 0.658c0.359 0.376 0.954 0.39 1.331 0.032s0.39-0.954 0.032-1.331l-0.627-0.658z"
				></path>
				<path
					d="M16.801 28.149c-0.519 0.025-0.919 0.467-0.894 0.986l0.046 0.938c0.025 0.519 0.467 0.92 0.986 0.894s0.919-0.467 0.894-0.986l-0.046-0.938c-0.025-0.519-0.467-0.919-0.986-0.894v0z"
				></path>
				<path
					d="M22.269 26.827c-0.148-0.498-0.672-0.783-1.17-0.635s-0.783 0.672-0.635 1.17l0.251 0.848c0.148 0.499 0.672 0.782 1.17 0.635s0.783-0.672 0.635-1.17l-0.251-0.848z"
				></path>
				<path
					d="M26.692 24.614c-0.268-0.445-0.847-0.588-1.292-0.32s-0.588 0.847-0.32 1.292l0.457 0.757c0.268 0.445 0.847 0.588 1.292 0.32s0.588-0.847 0.32-1.292l-0.457-0.757z"
				></path>
				<path
					d="M31.736 23.109l-0.662-0.666c-0.366-0.369-0.962-0.371-1.331-0.004s-0.371 0.962-0.004 1.331l0.662 0.666c0.366 0.368 0.962 0.371 1.331 0.004s0.371-0.962 0.004-1.331z"
				></path>
				<path
					d="M27.006 12.503l-0.285-0.64c-0.471-1.058-1.589-1.63-2.682-1.459l-0.176-0.395c-1.024-2.299-3.436-3.566-5.847-3.18l-0.618-1.405c-1.45-3.295-4.714-5.424-8.314-5.424-5.009 0-9.084 4.075-9.084 9.084v21.975c0 0.52 0.421 0.941 0.941 0.941h3.765c0.52 0 0.941-0.421 0.941-0.941v-21.975c0-1.895 1.542-3.437 3.437-3.437 1.362 0 2.597 0.805 3.146 2.052l0.664 1.508c-1.726 1.565-2.287 4.082-1.314 6.27l0.176 0.395c-0.843 0.684-1.189 1.889-0.709 2.968l0.285 0.64c0.623 1.399 2.263 2.038 3.673 1.41l10.59-4.714c1.402-0.624 2.034-2.272 1.41-3.673v0zM22.143 10.775l0.141 0.316-8.844 3.937-0.141-0.316c-0.802-1.803-0.012-3.92 1.819-4.736l2.287-1.019c1.857-0.822 3.943 0.032 4.738 1.818v0zM9.084 3.765c-2.933 0-5.319 2.386-5.319 5.319v21.034h-1.882v-21.034c0-3.971 3.23-7.201 7.201-7.201 2.854 0 5.442 1.688 6.591 4.3l0.546 1.241-1.72 0.766-0.55-1.248c-0.849-1.929-2.76-3.176-4.868-3.176v0zM24.83 14.456l-10.59 4.714c-0.455 0.202-0.986-0.002-1.188-0.456l-0.285-0.64c-0.141-0.317 0.001-0.688 0.318-0.829 0.811-0.361 10.848-4.829 11.088-4.936 0.316-0.141 0.688 0.002 0.829 0.318l0.285 0.64c0.202 0.453-0.003 0.987-0.456 1.188v0z"
				></path>
			</symbol>
			<symbol id="icon-square" viewBox="0 0 32 32">
				<path
					d="M32 3.125v25.75c0 1.723-1.402 3.125-3.125 3.125h-3.042c-0.69 0-1.25-0.56-1.25-1.25s0.56-1.25 1.25-1.25h3.042c0.345 0 0.625-0.28 0.625-0.625v-11.562h-11.042c-0.69 0-1.25-0.56-1.25-1.25s0.56-1.25 1.25-1.25h11.042v-11.688c0-0.345-0.28-0.625-0.625-0.625h-14.12v3.667c0 0.69-0.56 1.25-1.25 1.25s-1.25-0.56-1.25-1.25v-3.667h-9.13c-0.345 0-0.625 0.28-0.625 0.625v11.625h9.755v-3.667c0-0.69 0.56-1.25 1.25-1.25s1.25 0.56 1.25 1.25v9.833c0 0.69-0.56 1.25-1.25 1.25s-1.25-0.56-1.25-1.25v-3.666h-9.755v11.625c0 0.345 0.28 0.625 0.625 0.625h9.13v-3.667c0-0.69 0.56-1.25 1.25-1.25s1.25 0.56 1.25 1.25v3.667h6.162c0.69 0 1.25 0.56 1.25 1.25s-0.56 1.25-1.25 1.25h-17.791c-1.723 0-3.125-1.402-3.125-3.125v-25.75c0-1.723 1.402-3.125 3.125-3.125h25.75c1.723 0 3.125 1.402 3.125 3.125z"
				></path>
			</symbol>
			<symbol id="icon-year" viewBox="0 0 33 32">
				<path
					d="M30.049 18.712v-8.899c0 0 0 0 0-0.061s0-0.122 0-0.122v-0.061c0-0.061-0.061-0.061-0.061-0.122 0 0 0-0.061-0.061-0.061-0.061-0.061-0.061-0.061-0.122-0.122 0 0 0 0-0.061 0l-12.922-5.242c-0.061 0-0.122-0.061-0.244-0.061h-5.303c0-0.061-0.061-0.183-0.122-0.244l-2.56-3.474c-0.122-0.183-0.305-0.244-0.488-0.244s-0.366 0.061-0.488 0.244l-2.56 3.474c-0.061 0.061-0.061 0.183-0.122 0.244h-4.328c-0.366 0-0.61 0.244-0.61 0.61v5.242c0 0.366 0.244 0.61 0.61 0.61h4.328v13.775c-0.122 0-0.244 0.061-0.366 0.183l-2.865 3.048c-0.061 0.122-0.122 0.305-0.122 0.427v3.535c0 0.366 0.244 0.61 0.61 0.61h11.947c0.366 0 0.61-0.244 0.61-0.61v-3.535c0-0.183-0.061-0.305-0.183-0.427l-2.865-3.048c-0.061-0.122-0.183-0.122-0.366-0.183v-13.775h17.554v8.838c0 0.366 0.244 0.61 0.61 0.61 0.975 0 1.768 0.792 1.768 1.768s-0.792 1.768-1.768 1.768c-0.975 0-1.768-0.792-1.768-1.768 0-0.366-0.244-0.61-0.61-0.61s-0.61 0.244-0.61 0.61c0 1.646 1.341 2.987 2.987 2.987s2.987-1.341 2.987-2.987c-0.061-1.402-1.036-2.621-2.438-2.926zM8.107 1.707l1.707 2.316h-3.413l1.707-2.316zM13.47 28.099v2.682h-10.667v-2.682l2.499-2.682h5.608l2.56 2.682zM10.057 10.971v2.316l-3.901 2.133v-2.316l3.901-2.133zM6.156 11.642v-1.219h2.316l-2.316 1.219zM10.057 14.629v2.316l-3.901 2.133v-2.316l3.901-2.133zM10.057 18.286v2.316l-3.901 2.133v-2.316l3.901-2.133zM10.057 22.004v2.194l-3.901-0.061 3.901-2.133zM1.219 9.204v-4.023h15.299l9.874 4.023h-25.173z"
				></path>
			</symbol>
			<symbol id="icon-add-new" viewBox="0 0 42 32">
				<path
					d="M41.108 10.060l-9.584-9.584c-0.635-0.635-1.663-0.635-2.297 0l-3.643 3.643-3.643-3.643c-0.635-0.635-1.663-0.635-2.297 0l-3.643 3.643-3.643-3.643c-0.634-0.635-1.663-0.635-2.297 0l-9.584 9.584c-0.305 0.305-0.476 0.718-0.476 1.148v19.168c0 0.897 0.727 1.624 1.624 1.624h38.335c0.897 0 1.624-0.727 1.624-1.624v-19.168c0-0.431-0.171-0.844-0.476-1.148zM20.792 3.922c0.856 0.856 6.973 6.973 7.959 7.959v16.87h-6.335v-17.543c0-0.431-0.171-0.844-0.476-1.148l-3.643-3.643 2.495-2.495zM3.249 11.881l7.959-7.959 7.959 7.959v16.87h-3.14v-7.959c0-0.897-0.727-1.624-1.624-1.624h-6.389c-0.897 0-1.624 0.727-1.624 1.624v7.959h-3.141v-16.87zM12.779 28.751h-3.141v-6.335h3.141v6.335zM38.335 28.751h-6.335v-17.543c0-0.431-0.171-0.844-0.476-1.148l-3.643-3.643 2.495-2.495 7.959 7.959v16.87z"
				></path>
			</symbol>
			<symbol id="icon-my-properties" viewBox="0 0 32 32">
				<path
					d="M16.625 30.75c0 0.69-0.56 1.25-1.25 1.25h-14.125c-0.69 0-1.25-0.56-1.25-1.25v-17.208c0-0.371 0.165-0.723 0.45-0.96l14.75-12.292c0.464-0.386 1.137-0.386 1.601 0l14.75 12.292c0.53 0.442 0.602 1.23 0.16 1.761s-1.23 0.602-1.761 0.16l-13.95-11.625-13.5 11.25v15.373h12.875c0.69 0 1.25 0.56 1.25 1.25zM30.021 27.368c-1.372 1.654-3.42 3.167-6.088 4.5-0.352 0.176-0.765 0.176-1.117 0-2.668-1.332-4.716-2.846-6.087-4.5-4.071-4.908-1.236-10.325 2.958-10.325 1.672 0 2.901 0.684 3.688 1.327 0.786-0.642 2.016-1.327 3.688-1.327 4.203 0 7.020 5.429 2.959 10.325zM27.062 19.544c-1.729 0-2.637 1.296-2.646 1.309-0.519 0.783-1.613 0.735-2.080 0.005-0.077-0.108-0.974-1.314-2.649-1.314-2.694 0-5.009 5.192 3.688 9.801 8.696-4.608 6.382-9.801 3.687-9.801z"
				></path>
			</symbol>
			<symbol id="icon-heart" viewBox="0 0 32 32">
				<path
					d="M23.268 2.4c-2.65 0-4.973 1.182-6.717 3.417-0.233 0.298-0.44 0.596-0.624 0.885-0.184-0.289-0.391-0.587-0.624-0.885-1.745-2.235-4.068-3.417-6.717-3.417-5.005 0-8.586 4.191-8.586 9.22 0 5.751 4.713 11.17 15.282 17.573 0.198 0.12 0.421 0.18 0.645 0.18s0.447-0.060 0.645-0.18c10.569-6.403 15.282-11.822 15.282-17.573 0-5.027-3.577-9.22-8.586-9.22zM26.077 18.781c-2.2 2.455-5.525 5.040-10.151 7.89-4.625-2.85-7.95-5.435-10.151-7.89-2.212-2.468-3.288-4.811-3.288-7.161 0-3.621 2.447-6.732 6.097-6.732 1.859 0 3.444 0.808 4.711 2.402 1.013 1.275 1.44 2.591 1.443 2.6 0.162 0.52 0.643 0.874 1.188 0.874s1.026-0.354 1.188-0.874c0.004-0.013 0.418-1.288 1.398-2.543 1.274-1.632 2.874-2.459 4.756-2.459 3.654 0 6.097 3.114 6.097 6.732 0 2.35-1.075 4.692-3.288 7.161z"
				></path>
			</symbol>
			<symbol id="icon-save-search" viewBox="0 0 32 32">
				<path
					d="M32 13.542v12.291c0 0.69-0.56 1.25-1.25 1.25s-1.25-0.56-1.25-1.25v-11.706l-13.5-11.25-13.5 11.25v15.373h13.476c0.69 0 1.25 0.56 1.25 1.25s-0.56 1.25-1.25 1.25h-14.726c-0.69 0-1.25-0.56-1.25-1.25v-17.208c0-0.371 0.165-0.723 0.45-0.96l14.75-12.292c0.464-0.386 1.137-0.386 1.601 0l14.75 12.292c0.285 0.237 0.45 0.589 0.45 0.96zM26.711 29.866c0.488 0.488 0.488 1.28 0 1.768s-1.28 0.488-1.768 0l-5.457-5.457c-4.846 2.625-10.907-0.863-10.907-6.508 0-4.078 3.318-7.396 7.396-7.396 6.422 0 9.746 7.632 5.489 12.346l5.246 5.246zM15.976 24.565c2.699 0 4.896-2.196 4.896-4.896s-2.196-4.896-4.896-4.896c-2.7 0-4.896 2.196-4.896 4.896s2.196 4.896 4.896 4.896z"
				></path>
			</symbol>
			<symbol id="icon-review" viewBox="0 0 32 32">
				<path
					d="M16 0c-8.843 0-16 7.156-16 16 0 2.806 0.732 5.547 2.122 7.965l-2.062 6.402c-0.144 0.446-0.026 0.936 0.306 1.267 0.328 0.328 0.816 0.451 1.267 0.306l6.402-2.062c2.417 1.39 5.158 2.122 7.965 2.122 8.843 0 16-7.156 16-16 0-8.843-7.156-16-16-16zM16 29.5c-2.535 0-5.006-0.707-7.146-2.045-0.308-0.192-0.69-0.244-1.046-0.13l-4.621 1.488 1.488-4.621c0.113-0.351 0.065-0.733-0.13-1.046-1.338-2.14-2.045-4.611-2.045-7.146 0-7.444 6.056-13.5 13.5-13.5s13.5 6.056 13.5 13.5-6.056 13.5-13.5 13.5zM17.563 16c0 0.863-0.699 1.563-1.563 1.563s-1.563-0.7-1.563-1.563c0-0.863 0.699-1.563 1.563-1.563s1.563 0.699 1.563 1.563zM23.813 16c0 0.863-0.699 1.563-1.563 1.563s-1.563-0.7-1.563-1.563c0-0.863 0.699-1.563 1.563-1.563s1.563 0.699 1.563 1.563zM11.313 16c0 0.863-0.699 1.563-1.563 1.563s-1.563-0.7-1.563-1.563c0-0.863 0.7-1.563 1.563-1.563s1.563 0.699 1.563 1.563z"
				></path>
			</symbol>
			<symbol id="icon-my-package" viewBox="0 0 32 32">
				<path
					d="M30.75 0h-22.54c-0.332 0-0.649 0.132-0.884 0.366l-6.96 6.96c-0.224 0.224-0.366 0.544-0.366 0.884v22.539c0 0.69 0.56 1.25 1.25 1.25h22.54c0.331 0 0.649-0.133 0.881-0.364 0.001-0.001 0.002-0.001 0.003-0.002l6.96-6.96c0.234-0.234 0.366-0.552 0.366-0.884v-22.539c0-0.678-0.551-1.25-1.25-1.25zM23.272 6.96c-1.186 0-6.856 0-7.734 0l4.46-4.46h7.734l-4.46 4.46zM9.875 9.46h5.29v5.29h-5.29v-5.29zM8.728 2.5h7.734l-4.46 4.46c-1.639 0-6.139 0-7.734 0l4.46-4.46zM22.54 29.5h-20.040v-20.040h4.875v6.54c0 0.69 0.56 1.25 1.25 1.25h7.79c0.69 0 1.25-0.56 1.25-1.25v-6.54h4.875v20.040zM25.040 27.732v-19.004l4.46-4.46v19.004l-4.46 4.46z"
				></path>
			</symbol>
			<symbol id="icon-my-profile" viewBox="0 0 32 32">
				<path
					d="M27.314 19.427c-1.772-1.772-3.887-3.077-6.195-3.853 2.128-1.573 3.511-4.1 3.511-6.944 0-4.758-3.871-8.63-8.63-8.63s-8.63 3.871-8.63 8.63c0 2.844 1.383 5.37 3.511 6.944-2.308 0.776-4.423 2.081-6.195 3.853-3.022 3.022-4.686 7.040-4.686 11.314 0 0.696 0.564 1.26 1.26 1.26h29.481c0.696 0 1.26-0.564 1.26-1.26 0-4.274-1.664-8.292-4.686-11.314zM9.889 8.63c0-3.369 2.741-6.111 6.111-6.111s6.111 2.741 6.111 6.111-2.741 6.111-6.111 6.111c-3.369 0-6.111-2.741-6.111-6.111zM2.578 29.481c0.637-6.845 6.414-12.221 13.422-12.221s12.785 5.376 13.422 12.221h-26.845z"
				></path>
			</symbol>
			<symbol id="icon-log-out" viewBox="0 0 32 32">
				<path
					d="M22.898 25.291c-0.705 0-1.277 0.572-1.277 1.277v3.577h-18.266v-27.59h18.266v3.577c0 0.705 0.572 1.277 1.277 1.277s1.277-0.572 1.277-1.277v-4.854c0-0.705-0.572-1.277-1.277-1.277h-20.821c-0.705 0-1.277 0.572-1.277 1.277v30.145c0 0.705 0.572 1.277 1.277 1.277h20.821c0.705 0 1.277-0.572 1.277-1.277v-4.854c-0-0.705-0.572-1.277-1.277-1.277z"
				></path>
				<path
					d="M31.21 15.447l-3.432-3.432c-0.499-0.499-1.308-0.499-1.806 0s-0.499 1.308 0 1.806l1.252 1.252-10.581-0c-0.705 0-1.277 0.572-1.277 1.277s0.572 1.277 1.277 1.277l10.581 0-1.252 1.252c-0.499 0.499-0.499 1.308 0 1.806s1.308 0.499 1.806-0l3.432-3.432c0-0 0-0 0-0 0.257-0.257 0.365-0.555 0.374-0.903 0-0.344-0.146-0.675-0.374-0.903z"
				></path>
			</symbol>
			<symbol id="icon-1" viewBox="0 0 32 32">
				<path
					d="M16.625 30.75c0 0.69-0.56 1.25-1.25 1.25h-14.125c-0.69 0-1.25-0.56-1.25-1.25v-17.208c0-0.371 0.165-0.723 0.45-0.96l14.75-12.292c0.464-0.386 1.137-0.386 1.601 0l14.75 12.292c0.53 0.442 0.602 1.23 0.16 1.761s-1.23 0.602-1.761 0.16l-13.95-11.625-13.5 11.25v15.373h12.875c0.69 0 1.25 0.56 1.25 1.25zM30.021 27.368c-1.372 1.654-3.42 3.167-6.088 4.5-0.352 0.176-0.765 0.176-1.117 0-2.668-1.332-4.716-2.846-6.087-4.5-4.071-4.908-1.236-10.325 2.959-10.325 1.672 0 2.901 0.684 3.687 1.327 0.786-0.642 2.016-1.327 3.687-1.327 4.203 0 7.020 5.429 2.959 10.325zM27.062 19.544c-1.729 0-2.637 1.296-2.646 1.309-0.519 0.783-1.614 0.735-2.080 0.005-0.077-0.108-0.974-1.314-2.649-1.314-2.694 0-5.009 5.192 3.687 9.801 8.696-4.608 6.382-9.801 3.688-9.801z"
				></path>
			</symbol>
			<symbol id="icon-2" viewBox="0 0 32 32">
				<path
					d="M31.732 15.334c-0.285-0.39-7.083-9.556-15.765-9.556s-15.48 9.166-15.765 9.556c-0.27 0.37-0.27 0.872 0 1.243 0.285 0.39 7.083 9.556 15.765 9.556s15.479-9.166 15.765-9.556c0.271-0.37 0.271-0.873 0-1.243zM15.967 24.026c-6.395 0-11.934-6.083-13.573-8.072 1.637-1.99 7.165-8.071 13.573-8.071 6.395 0 11.933 6.082 13.573 8.072-1.637 1.99-7.165 8.071-13.573 8.071z"
				></path>
				<path
					d="M15.967 9.638c-3.483 0-6.317 2.834-6.317 6.317s2.834 6.317 6.317 6.317 6.317-2.834 6.317-6.317-2.834-6.317-6.317-6.317zM15.967 20.166c-2.322 0-4.211-1.889-4.211-4.211s1.889-4.211 4.211-4.211 4.211 1.889 4.211 4.211-1.889 4.211-4.211 4.211z"
				></path>
			</symbol>
			<symbol id="icon-building" viewBox="0 0 32 32">
				<path
					d="M25.328 31.373v-26.854l0.021-0.020-4.030-4.174v-0.012h-0.012l-0.302-0.313-0.013 0.013-8.912 4.030 0.004 0.010h-0.012v10.087l-4.582 2.072 0.005 0.012v15.149h-2.689v0.627h22.387v-0.627h-1.866zM24.701 4.731v26.642h-3.383v-30.146l3.383 3.503zM12.699 4.451l7.993-3.615v30.537h-1.337v-15.302h-0.005l0.002-0.003-4.521-3.176-2.133 0.965v-9.405zM18.728 16.395v14.978h-3.669v-17.556l3.669 2.578zM8.122 16.614l6.31-2.854v17.613h-6.31v-14.759z"
				></path>
			</symbol>
			<symbol id="icon-villa" viewBox="0 0 43 32">
				<path
					d="M37.721 29.014v-15.41h-0.006l0.003-0.005-16.167-11.59-0.013 0.018-0-0.001-16.146 11.578v15.41h-2.635v0.976h37.579v-0.976h-2.615zM6.369 14.103l15.188-10.889 15.188 10.889v14.911h-6.49v-11.655h-0.001l0.002-0.002-6.254-4.664v-0.095h-0.976v16.417h-2.936v-16.417h-0.976v0.095l-6.254 4.666v11.655h-6.49v-14.911zM29.279 17.864l-5.278 2.079v-6.021l5.278 3.936v0.007zM24.001 20.436l5.278-2.079v10.657h-5.278v-8.578zM19.113 19.942l-5.278-2.079v-0.007l5.278-3.936v6.021zM13.835 18.357l5.278 2.079v8.578h-5.278v-10.657z"
				></path>
			</symbol>
			<symbol id="icon-sofa" viewBox="0 0 41 32">
				<path
					d="M19.521 8.762c-1.015-0.256-2.091-0.030-2.917 0.614s-1.309 1.632-1.309 2.679v0.28h1.661v-0.28c0.002-1.555 1.058-2.91 2.565-3.292v0z"
				></path>
				<path
					d="M17.089 25.881v-0.189c-0.006-1.037-0.679-1.953-1.667-2.27v-3.418c0.010-0.608 0.51-1.093 1.117-1.085h-1.661c-0.608-0.008-1.108 0.477-1.117 1.085v3.418c0.988 0.317 1.66 1.233 1.667 2.27v0.189l1.661-0z"
				></path>
				<path
					d="M36.403 18.919h-1.661c0.608-0.008 1.108 0.477 1.117 1.085v3.475c-0.907 0.361-1.505 1.237-1.51 2.213v0.195l1.661 0v-0.195c0.005-0.977 0.603-1.852 1.51-2.213v-3.475c-0.010-0.608-0.509-1.093-1.117-1.085v0z"
				></path>
				<path
					d="M13.828 24.557c-0.244-0.17-0.534-0.261-0.831-0.26-0.781-0.010-1.422 0.614-1.434 1.395v5.311h1.661v-5.311c0.002-0.454 0.228-0.879 0.603-1.135z"
				></path>
				<path
					d="M38.44 24.297c-0.297-0-0.587 0.090-0.831 0.26 0.375 0.256 0.601 0.68 0.603 1.135v5.311h1.661v-5.311c-0.012-0.781-0.653-1.405-1.434-1.395v0z"
				></path>
				<path
					d="M25.669 26.881l-10.242-0.003v1.661l20.582 0.006v-1.661z"
				></path>
				<path
					d="M38.517 23.302v-3.298c-0.010-1.158-0.956-2.089-2.114-2.082h-9.121c-0.561-0.003-1.1 0.22-1.495 0.617-0.041 0.042-0.080 0.084-0.117 0.128-0.404-0.474-0.996-0.746-1.619-0.745h-9.173c-1.158-0.008-2.104 0.924-2.114 2.082v3.307c-1.236 0.109-2.187 1.14-2.198 2.381v5.81c0 0.275 0.223 0.498 0.498 0.498h3.864c0.275 0 0.498-0.223 0.498-0.498v-0.664l20.582 0.006v0.658c0 0.275 0.223 0.498 0.498 0.498h3.864c0.275 0 0.498-0.223 0.498-0.498v-5.81c-0.012-1.301-1.053-2.358-2.354-2.39v0zM26.493 19.242c0.209-0.209 0.493-0.326 0.789-0.324h9.121c0.608-0.008 1.108 0.477 1.117 1.085v3.475c-0.907 0.361-1.505 1.237-1.51 2.213v0.195l-9.842-0.003 0.001-5.831c-0.005-0.303 0.112-0.595 0.324-0.811v0zM14.878 18.919h9.172c0.608-0.008 1.108 0.477 1.117 1.085l0.002 5.88-9.743-0.003v-0.189c-0.006-1.037-0.679-1.953-1.667-2.27v-3.418c0.010-0.608 0.51-1.093 1.117-1.085v-0zM14.431 31.003h-2.868v-5.311c0.021-0.777 0.657-1.395 1.434-1.395s1.412 0.618 1.434 1.395v5.311zM15.427 29.84v-2.962l20.582 0.006v2.963l-20.582-0.007zM39.874 31.003h-2.867v-5.311c0.020-0.777 0.656-1.396 1.434-1.396s1.413 0.619 1.434 1.396v5.311z"
				></path>
				<path
					d="M17.313 9.63c-0.453 0.32-0.841 0.724-1.143 1.188-0.097 0.149-0.108 0.339-0.027 0.498s0.24 0.263 0.417 0.272c0.178 0.010 0.347-0.076 0.445-0.225 0.234-0.36 0.534-0.672 0.885-0.92 0.223-0.16 0.274-0.469 0.116-0.693s-0.468-0.277-0.692-0.12v0z"
				></path>
				<path
					d="M19.176 7.689c-0.227-4.28-3.622-7.689-7.763-7.689-4.273 0-7.752 3.63-7.775 8.101-0.001 0.012-0.002 0.023-0.002 0.035v22.867h-3.137c-0.275 0-0.498 0.223-0.498 0.498s0.223 0.498 0.498 0.498h7.788c0.275 0 0.498-0.223 0.498-0.498s-0.223-0.498-0.498-0.498h-3.653v-22.833c0-0.008 0.001-0.016 0.001-0.024 0-3.942 3.041-7.149 6.779-7.149 3.593 0 6.541 2.964 6.764 6.696-2.21 0.263-3.876 2.135-3.879 4.361v0.779c0 0.275 0.223 0.498 0.498 0.498h2.218c0.22 0.797 0.933 1.387 1.767 1.387s1.547-0.589 1.767-1.387h2.036c0.275 0 0.498-0.223 0.498-0.498v-0.779c-0.003-2.237-1.684-4.115-3.907-4.365v0zM18.781 13.721c-0.281-0.005-0.54-0.151-0.688-0.39h1.376c-0.148 0.238-0.407 0.385-0.688 0.39zM22.086 12.335h-6.791v-0.281c0-1.875 1.52-3.396 3.396-3.396s3.396 1.52 3.396 3.396v0.281z"
				></path>
			</symbol>
			<symbol id="icon-family" viewBox="0 0 36 32">
				<path
					d="M32.8 0h-29.291c-1.937 0.002-3.507 1.572-3.509 3.509v24.982c0.002 1.937 1.572 3.507 3.509 3.509h29.291c1.937-0.002 3.507-1.572 3.509-3.509v-24.982c-0.002-1.937-1.572-3.507-3.509-3.509zM32.8 31.085h-29.291c-1.432-0.002-2.592-1.162-2.594-2.593v-19.108h34.478v19.108c-0.002 1.432-1.162 2.592-2.593 2.593zM35.394 8.468h-34.478v-4.959c0.001-1.432 1.162-2.592 2.594-2.594h29.291c1.432 0.001 2.592 1.162 2.593 2.594v4.959z"
				></path>
				<path
					d="M10.184 2.96h-0.006c-0.975-0.002-1.767 0.788-1.769 1.763s0.788 1.767 1.763 1.769h0.006c0.975 0.002 1.767-0.788 1.768-1.763s-0.788-1.767-1.763-1.768zM10.777 5.329c-0.159 0.159-0.375 0.248-0.599 0.247h-0.003c-0.47-0.001-0.85-0.382-0.849-0.852s0.382-0.85 0.852-0.849h0.003c0.344 0.001 0.653 0.209 0.784 0.527s0.057 0.684-0.187 0.926l-0 0z"
				></path>
				<path
					d="M4.308 2.942h-0.006c-0.975-0.002-1.767 0.788-1.769 1.763s0.788 1.767 1.763 1.768h0.005c0.976 0.002 1.767-0.788 1.769-1.763s-0.788-1.767-1.763-1.769zM4.902 5.31c-0.159 0.159-0.375 0.248-0.599 0.247h-0.003c-0.47-0.001-0.85-0.382-0.849-0.852s0.382-0.85 0.852-0.849h0.003c0.344 0.001 0.653 0.209 0.784 0.527s0.057 0.684-0.187 0.926v0z"
				></path>
				<path
					d="M16.059 2.978h-0.005c-0.975-0.002-1.767 0.788-1.769 1.763s0.788 1.767 1.763 1.769h0.006c0.975 0.002 1.767-0.788 1.768-1.763s-0.788-1.767-1.763-1.768zM16.653 5.347c-0.273 0.271-0.693 0.325-1.026 0.133s-0.495-0.585-0.395-0.957c0.1-0.371 0.437-0.629 0.821-0.629h0.003c0.344 0.001 0.653 0.209 0.784 0.527s0.057 0.684-0.187 0.926z"
				></path>
				<path
					d="M11.942 26.679c0 0.253 0.205 0.458 0.458 0.458h11.511c0.253 0 0.458-0.205 0.458-0.458v-7.347h1.926c0.198 0 0.374-0.128 0.435-0.316s-0.005-0.395-0.166-0.512l-8.139-5.926c-0.161-0.117-0.378-0.117-0.539 0l-8.139 5.926c-0.16 0.116-0.227 0.323-0.166 0.512s0.237 0.316 0.435 0.316h1.926l-0 7.347zM11.422 18.417l6.733-4.902 6.733 4.902h-0.978c-0.253 0-0.458 0.205-0.458 0.458v7.347h-10.595v-7.347c0-0.253-0.205-0.458-0.458-0.458h-0.977z"
				></path>
				<path
					d="M18.154 20.274c1.095 0 1.983-0.888 1.983-1.983s-0.888-1.983-1.983-1.983-1.983 0.888-1.983 1.983c0.001 1.095 0.889 1.982 1.983 1.983zM18.154 17.222c0.59 0 1.068 0.478 1.068 1.068s-0.478 1.068-1.068 1.068-1.068-0.478-1.068-1.068c0.001-0.589 0.479-1.067 1.068-1.068z"
				></path>
			</symbol>
			<symbol id="icon-heating" viewBox="0 0 52 32">
				<path
					d="M50.766 0h-49.879c-0.49-0-0.887 0.396-0.887 0.886 0 0 0 0.001 0 0.001v19.111c0 0.49 0.397 0.887 0.887 0.887h49.879c0.49 0 0.887-0.397 0.887-0.887v-19.111c0-0.49-0.396-0.887-0.886-0.887-0 0-0.001 0-0.001 0zM46.671 19.111h-41.688v-8.001h41.688v8.001zM49.879 19.111h-1.435v-8.89c0-0.49-0.396-0.887-0.886-0.887-0 0-0.001 0-0.001 0h-43.462c-0.49-0-0.887 0.396-0.887 0.886 0 0 0 0.001 0 0.001v8.89h-1.435v-17.337h48.105v17.337z"
				></path>
				<path
					d="M7.516 14.326h36.62c0.49 0 0.887-0.397 0.887-0.887s-0.397-0.887-0.887-0.887h-36.62c-0.49 0-0.887 0.397-0.887 0.887s0.397 0.887 0.887 0.887z"
				></path>
				<path
					d="M7.516 17.618h36.62c0.49 0 0.887-0.397 0.887-0.887s-0.397-0.887-0.887-0.887h-36.62c-0.49 0-0.887 0.397-0.887 0.887s0.397 0.887 0.887 0.887z"
				></path>
				<path
					d="M35.541 7.904h12.016c0.49 0 0.887-0.396 0.887-0.886 0-0 0-0.001 0-0.001v-3.041c0-0.49-0.397-0.887-0.887-0.887h-12.016c-0.49 0-0.887 0.397-0.887 0.887v3.041c-0 0.49 0.396 0.887 0.886 0.887 0 0 0.001 0 0.001 0zM36.428 4.863h10.242v1.267h-10.242v-1.267z"
				></path>
				<path
					d="M8.442 26.728c-0.377-0.288-0.807-0.725-0.722-1.172 0.088-0.326 0.33-0.588 0.648-0.702 0.472-0.134 0.746-0.624 0.613-1.096s-0.624-0.746-1.096-0.613c-0.966 0.295-1.696 1.090-1.907 2.078-0.116 0.604-0.089 1.785 1.386 2.913 0.344 0.222 0.521 0.63 0.448 1.033-0.112 0.517-0.493 0.935-0.998 1.093-0.469 0.141-0.735 0.635-0.594 1.104 0.113 0.377 0.461 0.634 0.854 0.631 0.087 0 0.174-0.013 0.257-0.038 1.145-0.346 2.004-1.298 2.23-2.473 0.194-1.059-0.242-2.134-1.119-2.759v0z"
				></path>
				<path
					d="M15.666 26.728c-0.377-0.288-0.807-0.725-0.722-1.172 0.088-0.326 0.33-0.588 0.648-0.702 0.469-0.143 0.732-0.639 0.589-1.107-0.139-0.455-0.612-0.719-1.072-0.599-0.966 0.295-1.696 1.090-1.907 2.078-0.116 0.604-0.089 1.785 1.386 2.913 0.344 0.222 0.521 0.63 0.448 1.033-0.112 0.517-0.493 0.935-0.998 1.093-0.469 0.141-0.735 0.635-0.594 1.104 0.113 0.375 0.459 0.632 0.85 0.631 0.087 0 0.174-0.013 0.257-0.038 1.145-0.346 2.004-1.298 2.23-2.473 0.196-1.059-0.239-2.135-1.116-2.761v0z"
				></path>
				<path
					d="M22.887 26.728c-0.377-0.288-0.807-0.725-0.722-1.172 0.088-0.326 0.33-0.588 0.648-0.702 0.472-0.134 0.746-0.624 0.613-1.096s-0.624-0.746-1.096-0.613v0c-0.966 0.295-1.696 1.090-1.907 2.078-0.116 0.604-0.089 1.785 1.386 2.913 0.344 0.222 0.521 0.63 0.448 1.033-0.112 0.517-0.493 0.935-0.998 1.093-0.469 0.141-0.735 0.635-0.594 1.104 0.113 0.375 0.459 0.632 0.85 0.631 0.087 0 0.174-0.013 0.257-0.038 1.145-0.346 2.004-1.298 2.23-2.473 0.195-1.058-0.24-2.133-1.115-2.759v0z"
				></path>
				<path
					d="M30.111 26.728c-0.377-0.288-0.807-0.725-0.722-1.172 0.088-0.326 0.33-0.588 0.648-0.702 0.469-0.143 0.732-0.639 0.589-1.107-0.139-0.455-0.612-0.719-1.072-0.599-0.966 0.295-1.696 1.090-1.907 2.078-0.116 0.604-0.089 1.785 1.386 2.913 0.344 0.222 0.521 0.63 0.448 1.033-0.112 0.517-0.493 0.935-0.998 1.093-0.469 0.141-0.735 0.635-0.594 1.104 0.113 0.375 0.459 0.632 0.85 0.631 0.087 0 0.174-0.013 0.258-0.038 1.145-0.346 2.004-1.298 2.23-2.473 0.196-1.059-0.239-2.135-1.116-2.761v0z"
				></path>
				<path
					d="M37.332 26.728c-0.377-0.288-0.807-0.725-0.722-1.172 0.088-0.326 0.33-0.588 0.648-0.702 0.472-0.134 0.746-0.624 0.613-1.096s-0.624-0.746-1.096-0.613c-0.966 0.295-1.696 1.090-1.907 2.078-0.116 0.604-0.089 1.785 1.386 2.913 0.344 0.222 0.521 0.63 0.448 1.033-0.112 0.517-0.493 0.935-0.998 1.093-0.469 0.141-0.735 0.635-0.594 1.104 0.113 0.377 0.461 0.634 0.854 0.631 0.087 0 0.174-0.013 0.258-0.038 1.145-0.346 2.004-1.298 2.23-2.473 0.194-1.059-0.242-2.134-1.119-2.759v0z"
				></path>
				<path
					d="M44.556 26.728c-0.377-0.288-0.807-0.725-0.722-1.172 0.088-0.326 0.33-0.588 0.648-0.702 0.469-0.143 0.732-0.639 0.589-1.107-0.139-0.455-0.612-0.719-1.072-0.599-0.966 0.295-1.696 1.090-1.907 2.078-0.116 0.604-0.089 1.785 1.386 2.913 0.344 0.222 0.521 0.63 0.448 1.033-0.112 0.517-0.493 0.935-0.998 1.093-0.469 0.141-0.735 0.635-0.594 1.104 0.113 0.375 0.459 0.632 0.85 0.631 0.087 0 0.174-0.013 0.258-0.038 1.145-0.346 2.004-1.298 2.23-2.473 0.196-1.059-0.239-2.135-1.116-2.761v0z"
				></path>
			</symbol>
			<symbol id="icon-price" viewBox="0 0 32 32">
				<path
					d="M32 4.246c0-2.341-1.554-4.246-3.463-4.246h-25.075c-1.91 0-3.463 1.904-3.463 4.246v27.197c0 0.308 0.249 0.557 0.557 0.557v0h27.98c0.308 0 0.557-0.249 0.557-0.557v0-23.012c1.645-0.328 2.905-2.079 2.905-4.185v0zM1.114 30.886v-26.64c0-1.726 1.054-3.131 2.348-3.131 1.283 0 2.327 1.38 2.346 3.084h-3.208c-0.308 0-0.557 0.249-0.557 0.557 0 1.646 0.849 3.128 2.111 3.687h0.003c0.031 0.014 0.063 0.024 0.096 0.032 0.005 0 0.009 0.004 0.014 0.004 0.015 0.003 0.032 0.003 0.047 0.005 0.021 0.003 0.042 0.006 0.064 0.007h23.6v22.394h-26.864zM4.235 7.199c-0.575-0.472-0.946-1.147-1.035-1.886h2.465c-0.186 0.804-0.706 1.49-1.431 1.886h0zM28.538 7.377h-22.734c0.591-0.687 0.965-1.535 1.075-2.435 0.033-0.083 0.043-0.173 0.027-0.261 0.012-0.144 0.020-0.289 0.020-0.436 0.017-1.147-0.386-2.26-1.133-3.131h22.745c1.295 0 2.348 1.405 2.348 3.131s-1.054 3.131-2.349 3.131h0z"
				></path>
				<path
					d="M6.147 15.613l0.472-0.253v6.474c0 0.308 0.249 0.557 0.557 0.557h3.072c0.308 0 0.557-0.249 0.557-0.557v-2.758h2.077v2.758c0 0.308 0.249 0.557 0.557 0.557h3.072c0.308 0 0.557-0.249 0.557-0.557v-6.471l0.48 0.255c0.273 0.144 0.61 0.040 0.755-0.232s0.040-0.61-0.232-0.755v0l-6.003-3.18c-0.164-0.087-0.36-0.087-0.524 0l-5.925 3.18c-0.274 0.141-0.381 0.477-0.24 0.751s0.477 0.381 0.751 0.24c0.005-0.003 0.011-0.006 0.016-0.009l0.001 0.001zM11.809 12.575l4.146 2.197v6.505h-1.958v-2.758c0-0.308-0.249-0.557-0.557-0.557h-3.192c-0.308 0-0.557 0.249-0.557 0.557v2.758h-1.958v-6.515l4.076-2.187z"
				></path>
				<path
					d="M7.476 24.569h-1.592c-0.308 0-0.557 0.249-0.557 0.557s0.249 0.557 0.557 0.557h1.592c0.308 0 0.557-0.249 0.557-0.557s-0.249-0.557-0.557-0.557z"
				></path>
				<path
					d="M13.298 24.569h-2.911c-0.308 0-0.557 0.249-0.557 0.557s0.249 0.557 0.557 0.557h2.911c0.308 0 0.557-0.249 0.557-0.557s-0.249-0.557-0.557-0.557z"
				></path>
				<path
					d="M19.12 24.569h-2.912c-0.308 0-0.557 0.249-0.557 0.557s0.249 0.557 0.557 0.557h2.912c0.308 0 0.557-0.249 0.557-0.557s-0.249-0.557-0.557-0.557z"
				></path>
				<path
					d="M23.622 24.569h-1.592c-0.308 0-0.557 0.249-0.557 0.557s0.249 0.557 0.557 0.557h1.592c0.308 0 0.557-0.249 0.557-0.557s-0.249-0.557-0.557-0.557z"
				></path>
				<path
					d="M20.967 14.093c0.308 0 0.557-0.249 0.557-0.557v-1.592c0-0.308-0.249-0.557-0.557-0.557s-0.557 0.249-0.557 0.557v1.592c0 0.308 0.249 0.557 0.557 0.557z"
				></path>
				<path
					d="M20.967 19.069c0.308 0 0.557-0.249 0.557-0.557v-2.488c0-0.308-0.249-0.557-0.557-0.557s-0.557 0.249-0.557 0.557v2.488c-0 0.308 0.249 0.557 0.557 0.558 0 0 0 0 0 0z"
				></path>
				<path
					d="M20.967 24.045c0.308 0 0.557-0.249 0.557-0.557v-2.488c0-0.308-0.249-0.557-0.557-0.557s-0.557 0.249-0.557 0.557v2.488c-0 0.308 0.249 0.558 0.557 0.558 0 0 0 0 0.001 0z"
				></path>
				<path
					d="M20.967 25.418c-0.308 0-0.557 0.249-0.557 0.557v1.592c0 0.308 0.249 0.557 0.557 0.557s0.557-0.249 0.557-0.557v-1.592c0-0.308-0.249-0.557-0.557-0.557z"
				></path>
			</symbol>
			<symbol id="icon-status" viewBox="0 0 32 32">
				<path
					d="M31.173 10.070c-1.097-1.097-2.881-1.097-3.978 0-0.337 0.338-2.491 2.494-2.821 2.823v-7.429c0-0.751-0.293-1.458-0.824-1.989l-2.652-2.652c-0.531-0.531-1.238-0.824-1.989-0.824h-16.098c-1.551 0-2.813 1.262-2.813 2.813v26.375c0 1.551 1.262 2.813 2.813 2.813h18.75c1.551 0 2.813-1.262 2.813-2.813v-8.336l6.798-6.804c1.099-1.099 1.099-2.878 0-3.977zM18.75 1.875c0.177 0 0.518-0.031 0.824 0.275l2.652 2.652c0.297 0.298 0.275 0.624 0.275 0.824h-3.75v-3.75zM22.5 29.187c0 0.517-0.42 0.938-0.938 0.938h-18.75c-0.517 0-0.938-0.421-0.938-0.938v-26.375c0-0.517 0.421-0.938 0.938-0.938h14.062v4.688c0 0.518 0.42 0.937 0.938 0.937h4.687v7.27c0 0-2.766 2.768-2.766 2.768l-1.325 1.325c-0.103 0.103-0.18 0.228-0.227 0.366l-1.326 3.977c-0.112 0.337-0.025 0.708 0.227 0.959s0.623 0.339 0.959 0.227l3.977-1.326c0.138-0.046 0.264-0.124 0.366-0.227l0.114-0.114v6.46zM20.397 19.527l1.326 1.326-0.506 0.506-1.989 0.663 0.663-1.989 0.506-0.506zM23.049 19.526l-1.326-1.326c0.706-0.707 3.842-3.845 4.507-4.51l1.326 1.326-4.507 4.51zM29.847 12.722l-0.966 0.967-1.326-1.326 0.967-0.968c0.366-0.366 0.96-0.366 1.326 0s0.367 0.958-0 1.326z"
				></path>
				<path
					d="M4.138 7.963c0.093 0 0.185-0.018 0.271-0.051v4.568c0 0.414 0.336 0.75 0.75 0.75h2.412c0.414 0 0.75-0.336 0.75-0.75v-1.853h1.006v1.853c0 0.414 0.336 0.75 0.75 0.75h2.412c0.414 0 0.75-0.336 0.75-0.75v-4.567c0.086 0.033 0.178 0.050 0.269 0.050 0.279 0 0.534-0.153 0.664-0.4 0.194-0.366 0.053-0.821-0.312-1.015l-4.713-2.496c-0.108-0.058-0.23-0.088-0.352-0.088s-0.244 0.030-0.354 0.088l-4.647 2.494c-0.178 0.092-0.31 0.247-0.371 0.438s-0.044 0.394 0.048 0.572c0.129 0.251 0.385 0.406 0.667 0.406zM11.74 11.729h-0.912v-1.853c0-0.414-0.336-0.75-0.75-0.75h-2.506c-0.414 0-0.75 0.336-0.75 0.75v1.853h-0.912v-4.616l2.889-1.55 2.942 1.559v4.607z"
				></path>
				<path
					d="M3.636 15.568c0 0.407 0.333 0.739 0.739 0.739h15.151c0.407 0 0.739-0.333 0.739-0.739s-0.333-0.739-0.739-0.739h-15.151c-0.407 0-0.739 0.333-0.739 0.739z"
				></path>
				<path
					d="M16.757 17.627h-12.382c-0.407 0-0.739 0.333-0.739 0.739s0.333 0.739 0.739 0.739h12.382c0.406 0 0.739-0.333 0.739-0.739s-0.333-0.739-0.739-0.739z"
				></path>
				<path
					d="M4.375 20.425c-0.407 0-0.739 0.333-0.739 0.739s0.333 0.739 0.739 0.739h11.047c0.407 0 0.739-0.333 0.739-0.739s-0.333-0.739-0.739-0.739h-11.047z"
				></path>
				<path
					d="M15.589 23.962c0-0.406-0.333-0.739-0.739-0.739h-10.475c-0.407 0-0.739 0.333-0.739 0.739s0.333 0.739 0.739 0.739h10.475c0.406 0 0.739-0.333 0.739-0.739z"
				></path>
				<path
					d="M19.527 26.021h-5.489c-0.406 0-0.739 0.333-0.739 0.739s0.333 0.739 0.739 0.739h5.489c0.407 0 0.739-0.333 0.739-0.739s-0.333-0.739-0.739-0.739z"
				></path>
			</symbol>
			<symbol id="icon-e1" viewBox="0 0 34 32">
				<path
					d="M0.67 10.502l0.708-0.514v14.801c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-15.412l2.898-2.105 2.894 2.111v14.19c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-13.577l0.705 0.514c0.188 0.137 0.45 0.095 0.587-0.092s0.096-0.45-0.092-0.587l-1.2-0.876v-1.796c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v1.183l-2.646-1.93c-0.147-0.108-0.347-0.108-0.495-0.001l-4.694 3.41c-0.123 0.088-0.189 0.235-0.174 0.385s0.11 0.281 0.248 0.342 0.298 0.043 0.42-0.047z"
				></path>
				<path
					d="M10.586 4.17l0.708-0.514-0.001 11.865c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42l0.001-12.476 2.898-2.105 2.894 2.111-0.001 13.335c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42l0.001-12.722 0.705 0.514c0.187 0.137 0.45 0.096 0.587-0.092s0.096-0.45-0.092-0.587l-1.2-0.876v-1.796c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v1.183l-2.646-1.93c-0.147-0.108-0.347-0.108-0.495-0.001l-4.694 3.41c-0.188 0.137-0.229 0.399-0.093 0.587s0.399 0.229 0.587 0.093h0.001z"
				></path>
				<path
					d="M21.626 15.549h-0.001c-0.232 0-0.42 0.188-0.42 0.42l-0.001 0.805c-0 0.232 0.187 0.421 0.42 0.421h0.001c0.232 0 0.42-0.188 0.42-0.42l0.001-0.805c0-0.232-0.188-0.421-0.42-0.421z"
				></path>
				<path
					d="M19.915 9.438c0.137 0.188 0.399 0.229 0.587 0.093l0.707-0.514-0.003 5.596c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42l0.003-6.207 2.898-2.106 2.891 2.109-0.002 1.926v2.306c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-2.305l0.002-1.314 0.708 0.517c0.121 0.092 0.282 0.111 0.422 0.051s0.235-0.192 0.25-0.343-0.052-0.299-0.177-0.386l-1.202-0.877 0.002-1.794c0-0.232-0.188-0.421-0.42-0.421h-0.001c-0.232 0-0.42 0.188-0.42 0.42l-0.002 1.182-2.645-1.929c-0.147-0.108-0.347-0.108-0.495-0l-4.693 3.41c-0.188 0.136-0.23 0.399-0.093 0.587z"
				></path>
				<path
					d="M4.009 29.064c-0.232 0-0.42 0.188-0.42 0.42v2.027c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-2.027c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M4.429 22.963c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v5.006c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-5.006z"
				></path>
				<path
					d="M4.429 20.855c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v0.531c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.531z"
				></path>
				<path
					d="M1.798 28.785c-0.232 0-0.42 0.188-0.42 0.42v1.606c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-1.606c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M2.218 25.978c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v1.667c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-1.667z"
				></path>
				<path
					d="M8.431 28.179c-0.232 0-0.42 0.188-0.42 0.42v2.279c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-2.279c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M8.851 25.082c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v2.028c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-2.028z"
				></path>
				<path
					d="M6.64 21.736c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v2.687c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-2.687z"
				></path>
				<path
					d="M6.219 25.537c-0.232 0-0.42 0.188-0.42 0.42v5.622c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-5.622c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M6.64 20.025c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v0.511c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.511z"
				></path>
				<path
					d="M13.924 18.334c-0.232 0-0.42 0.188-0.42 0.42v3.435c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-3.435c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M14.344 17.223c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v0.137c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.137z"
				></path>
				<path
					d="M14.344 10.838c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v5.006c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-5.006z"
				></path>
				<path
					d="M11.293 17.081v1.606c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-1.606c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42z"
				></path>
				<path
					d="M17.925 17.876v0.878c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.878c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42z"
				></path>
				<path
					d="M16.555 12.299c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v0.115c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.115z"
				></path>
				<path
					d="M16.555 13.833c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v6.683c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-6.683z"
				></path>
				<path
					d="M16.135 21.626c-0.232 0-0.42 0.188-0.42 0.42v0.211c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.211c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M23.84 12.26c-0.232 0-0.42 0.188-0.42 0.42v2.348c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-2.348c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M24.26 11.213c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v0.027c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.027z"
				></path>
				<path
					d="M28.262 13.492c-0.232 0-0.42 0.188-0.42 0.42v0.337c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.337c0-0.232-0.188-0.42-0.42-0.42z"
				></path>
				<path
					d="M25.63 12.437v1.868c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-1.868c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42z"
				></path>
				<path
					d="M27.349 15.3c-3.933 0-7.12 3.188-7.121 7.12s3.188 7.12 7.121 7.12 7.12-3.188 7.12-7.12c-0.004-3.931-3.19-7.116-7.12-7.12zM27.349 28.7c-3.468 0-6.28-2.811-6.28-6.28s2.812-6.28 6.28-6.28 6.28 2.812 6.28 6.28c-0.004 3.467-2.813 6.276-6.28 6.28z"
				></path>
				<path
					d="M27.349 19.298c0.735 0.001 1.33 0.596 1.331 1.331 0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42c-0.001-1.037-0.734-1.928-1.751-2.13v-0.583c0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42v0.583c-1.096 0.216-1.849 1.23-1.74 2.342s1.043 1.96 2.161 1.96c0.724 0.012 1.306 0.601 1.309 1.325s-0.572 1.318-1.296 1.337c-0.004 0-0.009-0.001-0.013-0.001s-0.008 0.001-0.013 0.001c-0.73-0.007-1.317-0.601-1.318-1.33 0-0.232-0.188-0.42-0.42-0.42s-0.42 0.188-0.42 0.42c0.001 1.037 0.734 1.929 1.751 2.131v0.663c0 0.232 0.188 0.42 0.42 0.42s0.42-0.188 0.42-0.42v-0.663c1.096-0.217 1.849-1.23 1.74-2.342s-1.043-1.96-2.161-1.961c-0.735 0-1.331-0.596-1.331-1.331s0.596-1.331 1.331-1.331z"
				></path>
			</symbol>
			<symbol id="icon-e2" viewBox="0 0 44 32">
				<path
					d="M33.25 11.896l-4.293-3.126c0-0.008 0.001-0.016 0.001-0.025v-4.889c0-0.297-0.24-0.538-0.538-0.538s-0.538 0.241-0.538 0.538v4.131l-10.831-7.885c-0.189-0.138-0.444-0.138-0.633 0l-16.198 11.793c-0.188 0.137-0.267 0.38-0.195 0.601s0.279 0.371 0.511 0.371h4.207v18.594c0 0.297 0.241 0.538 0.538 0.538h22.907c0.297 0 0.538-0.241 0.538-0.538v-1.79c0-0.297-0.241-0.538-0.538-0.538s-0.538 0.241-0.538 0.538v1.253h-21.832v-18.595c0-0.297-0.241-0.538-0.538-0.538h-3.093l14.546-10.591 14.546 10.591h-3.093c-0.297 0-0.538 0.24-0.538 0.538v1.883c0 0.297 0.241 0.538 0.538 0.538s0.538-0.241 0.538-0.538v-1.345h4.207c0.233 0 0.439-0.15 0.511-0.371s-0.007-0.464-0.195-0.601z"
				></path>
				<path
					d="M28.205 16.62c-3.009 0-5.448 2.439-5.448 5.448s2.439 5.448 5.448 5.448 5.448-2.439 5.448-5.448c-0.004-3.008-2.441-5.445-5.448-5.448zM28.205 26.441c-2.415 0-4.373-1.958-4.373-4.373s1.958-4.373 4.373-4.373c2.415 0 4.373 1.958 4.373 4.373-0.003 2.414-1.959 4.37-4.373 4.373z"
				></path>
				<path
					d="M28.205 20.147c0.374 0 0.677 0.303 0.678 0.678 0 0.297 0.24 0.538 0.538 0.538s0.538-0.241 0.538-0.538c-0.001-0.761-0.492-1.434-1.215-1.668v-0.215c0-0.297-0.241-0.538-0.538-0.538s-0.538 0.241-0.538 0.538v0.215c-0.822 0.264-1.328 1.088-1.194 1.94s0.868 1.481 1.732 1.48c0.372 0.001 0.673 0.301 0.676 0.673s-0.295 0.676-0.666 0.682c-0.003 0-0.006 0-0.009 0s-0.006 0-0.009 0c-0.37-0.005-0.668-0.306-0.669-0.677 0-0.297-0.24-0.538-0.538-0.538s-0.538 0.241-0.538 0.538c0.001 0.76 0.492 1.434 1.215 1.668v0.271c0 0.297 0.241 0.538 0.538 0.538s0.538-0.241 0.538-0.538v-0.271c0.821-0.264 1.328-1.088 1.194-1.94s-0.869-1.481-1.732-1.481c-0.374 0-0.678-0.303-0.678-0.677s0.303-0.678 0.678-0.678h0z"
				></path>
				<path
					d="M43.931 25.7l-4.399-4.399c-0.154-0.154-0.385-0.2-0.586-0.117s-0.332 0.279-0.332 0.497v1.417h-2.452c0.044-0.342 0.066-0.686 0.066-1.031 0.001-2.113-0.834-4.141-2.323-5.64-0.009-0.011-0.017-0.023-0.027-0.033s-0.022-0.018-0.033-0.027c-2.542-2.521-6.448-3.050-9.569-1.293h-6.481v-1.418c0-0.217-0.131-0.413-0.332-0.497s-0.432-0.037-0.586 0.117l-4.399 4.399c-0.21 0.21-0.21 0.55 0 0.76l4.399 4.399c0.154 0.154 0.385 0.2 0.586 0.117s0.332-0.279 0.332-0.497v-1.418h2.452c-0.317 2.453 0.516 4.915 2.257 6.672 0.009 0.011 0.016 0.022 0.027 0.033s0.022 0.017 0.033 0.027c2.544 2.522 6.452 3.050 9.574 1.294h6.476v1.417c0 0.217 0.131 0.413 0.332 0.497s0.432 0.037 0.586-0.117l4.399-4.399c0.21-0.21 0.21-0.55 0-0.76l-0-0zM33.482 26.584l-0.154-0.154c-0.21-0.21-0.55-0.21-0.76 0s-0.21 0.55 0 0.76l0.154 0.154c-1.116 0.961-2.511 1.539-3.979 1.649v-0.219c0-0.297-0.241-0.538-0.538-0.538s-0.538 0.241-0.538 0.538v0.217c-1.468-0.113-2.861-0.691-3.977-1.65l0.152-0.152c0.21-0.21 0.21-0.55 0-0.76s-0.551-0.21-0.761-0l-0.152 0.152c-0.959-1.116-1.537-2.509-1.65-3.977h0.217c0.297 0 0.538-0.24 0.538-0.538s-0.24-0.538-0.538-0.538h-0.217c0.113-1.467 0.691-2.861 1.65-3.977l0.152 0.152c0.21 0.21 0.551 0.21 0.761-0s0.21-0.55 0-0.76l-0.152-0.152c1.116-0.959 2.509-1.537 3.977-1.65v0.217c0 0.297 0.241 0.538 0.538 0.538s0.538-0.241 0.538-0.538v-0.217c1.467 0.113 2.861 0.691 3.977 1.65l-0.152 0.152c-0.21 0.21-0.21 0.551 0 0.76s0.551 0.21 0.76 0l0.152-0.152c0.959 1.116 1.537 2.509 1.65 3.977h-0.217c-0.297 0-0.538 0.241-0.538 0.538s0.241 0.538 0.538 0.538h0.217c-0.020 0.272-0.057 0.542-0.109 0.81-0.031 0.069-0.047 0.143-0.048 0.218-0.252 1.090-0.763 2.102-1.492 2.952h0zM17.258 19.961c-0.297 0-0.538 0.241-0.538 0.538v0.657l-3.1-3.101 3.1-3.101v0.657c0 0.297 0.241 0.538 0.538 0.538h5.536c-0.078 0.071-0.154 0.144-0.229 0.218-0.011 0.009-0.023 0.017-0.033 0.027s-0.018 0.022-0.027 0.033c-0.974 0.983-1.677 2.2-2.042 3.534h-3.205zM39.69 29.181v-0.657c0-0.297-0.241-0.538-0.538-0.538h-5.53c0.085-0.078 0.168-0.157 0.249-0.239 0.002-0.002 0.005-0.004 0.008-0.006s0.004-0.005 0.006-0.007c0.985-0.987 1.697-2.214 2.064-3.56h3.204c0.297 0 0.538-0.241 0.538-0.538v-0.657l3.101 3.101-3.101 3.101z"
				></path>
			</symbol>
			<symbol id="icon-e3" viewBox="0 0 26 32">
				<path
					d="M25.717 8.038c-0.026-0.359-0.077-0.715-0.148-1.068-0.082-0.402-0.18-0.797-0.327-1.18-0.006-0.017-0.012-0.035-0.018-0.053 0-0.001 0-0.001-0.001-0.001-0.001-0.002-0.001-0.004-0.002-0.005-0.008-0.061-0.058-0.114-0.047-0.18-0.016-0.103-0.069-0.192-0.11-0.285-0.201-0.463-0.429-0.912-0.709-1.333-0.167-0.25-0.33-0.504-0.537-0.725-0.047-0.061-0.093-0.123-0.143-0.182-0.701-0.821-1.518-1.498-2.47-2.011-0.044-0.016-0.076-0.071-0.131-0.052-0.001-0.001-0.002-0.002-0.003-0.002-0.007-0.006-0.016-0.011-0.024-0.014-0.021-0.010-0.042-0.019-0.063-0.029-0.001-0.001-0.001-0.001-0.001-0.001-0.017-0.008-0.034-0.017-0.052-0.025-0.054-0.030-0.11-0.058-0.168-0.080-0.011-0.006-0.022-0.010-0.033-0.016 0 0 0 0-0.001-0.001-0.016-0.009-0.032-0.018-0.048-0.027-0.009-0.007-0.019-0.012-0.030-0.016-0.007-0.001-0.012-0.001-0.019-0.002 0 0 0-0.001-0.001 0-0.003-0-0.005-0.003-0.009-0.004-0.028-0.020-0.059-0.032-0.093-0.039-0.006-0.004-0.014-0.004-0.019-0.008-0.008-0.006-0.016-0.012-0.023-0.019-0.011-0.004-0.022-0.008-0.034-0.011-0.009-0.004-0.019-0.007-0.029-0.012-0.001 0-0.002-0.001-0.003-0.001-0.141-0.057-0.285-0.11-0.429-0.159-0.010-0.004-0.018-0.007-0.028-0.011-0.001 0-0.001 0.001-0.001 0-0.057-0.019-0.113-0.039-0.169-0.058-0.016-0.005-0.030-0.010-0.045-0.015-0.001-0.001-0.001-0.001-0.001 0s-0.001 0-0.001 0c-0.002-0.001-0.005-0.002-0.007-0.002 0.008-0 0.016 0.001 0.024-0 0.004-0.005 0.008-0.010 0.012-0.015-0.071-0.061-0.158-0.069-0.246-0.075-0.004 0.005-0.007 0.009-0.011 0.014 0.012 0.006 0.023 0.012 0.035 0.018-0.015-0.005-0.030-0.008-0.045-0.012-0.134-0.035-0.269-0.064-0.4-0.107-0.021-0.006-0.042-0.014-0.062-0.021-0.412-0.115-0.836-0.177-1.259-0.197-0.712-0.033-1.426-0.025-2.131 0.116-0.333 0.067-0.663 0.145-0.988 0.243-0.337 0.102-0.664 0.232-0.986 0.377-0.512 0.23-0.993 0.516-1.453 0.839-0.187 0.132-0.356 0.286-0.543 0.419-0.003 0.003-0.006 0.007-0.010 0.010-0.001 0.001-0.001 0.001-0.002 0.002-0.013-0.004-0.025-0.003-0.039 0.006-0.117 0.106-0.235 0.212-0.352 0.319-0.273 0.252-0.524 0.527-0.758 0.814-0.332 0.407-0.619 0.848-0.874 1.308-0.158 0.285-0.301 0.577-0.421 0.879-0.111 0.278-0.203 0.564-0.295 0.85-0.103 0.322-0.173 0.65-0.232 0.979-0.035 0.2-0.069 0.402-0.087 0.606-0.012 0.139-0.008 0.278-0.027 0.417-0.037 0.273-0.062 0.551-0.024 0.822 0.051 0.361 0.037 0.727 0.115 1.084 0.043 0.198 0.077 0.399 0.123 0.597 0.058 0.249 0.134 0.492 0.208 0.737 0.067 0.222 0.15 0.439 0.233 0.652 0.088 0.224 0.198 0.443 0.31 0.66 0.316 0.615 0.707 1.177 1.155 1.701 0.335 0.392 0.702 0.754 1.109 1.072 0.185 0.144 0.357 0.309 0.573 0.41 0.14 0.089 0.277 0.184 0.42 0.267 0.363 0.212 0.731 0.416 1.128 0.558 0.121 0.044 0.147 0.121 0.142 0.242-0.024 0.52-0.064 1.040-0.066 1.562-0.001 0.213-0.021 0.426-0.030 0.639-0.028 0.656-0.061 1.311-0.078 1.968-0.008 0.291 0.234 0.503 0.525 0.496 0.090-0.002 0.181-0.022 0.24-0.080 0.204-0.199 0.373-0.428 0.511-0.678-0 0-0 0-0 0s0-0 0-0c0.017-0.032 0.062-0.047 0.056-0.092 0-0 0-0 0-0 0.040 0.004 0.058-0.024 0.078-0.050 0.319-0.43 0.638-0.86 0.956-1.291 0.493-0.667 0.986-1.334 1.48-2.001 0.042-0.057 0.089-0.105 0.169-0.109 0.53-0.029 1.046-0.141 1.557-0.278 0.411-0.111 0.808-0.262 1.196-0.435 0.451-0.202 0.879-0.448 1.286-0.727 0.481-0.329 0.921-0.705 1.328-1.124 0.23-0.236 0.431-0.495 0.644-0.746 0.011-0.011 0.012-0.023 0.008-0.034 0.001-0.001 0.001-0.001 0.002-0.002 0.006-0.004 0.011-0.008 0.017-0.012 0.145-0.192 0.274-0.396 0.407-0.597 0.31-0.47 0.56-0.971 0.765-1.492 0.296-0.754 0.483-1.537 0.56-2.345 0.049-0.511 0.057-1.022 0.020-1.535zM21.104 15.318c-0.509 0.315-1.048 0.563-1.619 0.745-0.581 0.185-1.172 0.323-1.782 0.335-0.344 0.006-0.524 0.21-0.704 0.456-0.647 0.884-1.301 1.763-1.952 2.644-0.016 0.021-0.021 0.060-0.060 0.045-0.028-0.011-0.021-0.042-0.019-0.065 0.014-0.414 0.021-0.829 0.044-1.243 0.033-0.595 0.047-1.19 0.057-1.785 0.004-0.217-0.146-0.372-0.398-0.456-0.408-0.134-0.792-0.322-1.169-0.529-0.662-0.363-1.248-0.823-1.769-1.366-0.582-0.606-1.053-1.289-1.408-2.053-0.283-0.608-0.487-1.238-0.613-1.898-0.172-0.902-0.176-1.805-0.037-2.707 0.093-0.608 0.263-1.197 0.507-1.765 0.24-0.558 0.529-1.086 0.886-1.576 0.6-0.824 1.334-1.504 2.203-2.033 0.482-0.294 0.993-0.53 1.53-0.71 0.85-0.285 1.721-0.411 2.614-0.385 0.567 0.016 1.125 0.103 1.676 0.248 0.6 0.159 1.171 0.385 1.713 0.687 0.901 0.501 1.67 1.158 2.309 1.969 0.371 0.471 0.683 0.978 0.937 1.519 0.184 0.392 0.324 0.802 0.443 1.22 0.193 0.677 0.27 1.367 0.28 2.066 0.007 0.573-0.050 1.141-0.174 1.7-0.161 0.73-0.419 1.424-0.781 2.081-0.656 1.19-1.556 2.144-2.713 2.858zM15.252 20.804c0.001-0.001 0.002-0.002 0.003-0.003-0.003 0.005-0.007 0.010-0.010 0.016 0.002-0.004 0.005-0.009 0.007-0.012z"
				></path>
				<path
					d="M22.547 26.625c-1.031-1.030-2.062-2.060-3.091-3.091-0.288-0.289-0.602-0.513-1.025-0.573-0.2-0.028-0.388-0.005-0.567 0.045-0.332 0.094-0.603 0.299-0.846 0.543-0.528 0.532-1.060 1.061-1.59 1.591-0.115 0.115-0.241 0.221-0.337 0.354-0.266 0.264-0.628 0.263-0.92 0.083-0.297-0.183-0.611-0.337-0.928-0.482-0.429-0.253-0.839-0.534-1.244-0.824-0.362-0.259-0.703-0.546-1.051-0.822 0.002-0.029-0.018-0.042-0.037-0.059-0.166-0.146-0.335-0.29-0.496-0.441-0.71-0.661-1.385-1.356-2.009-2.1-0.33-0.394-0.65-0.796-0.945-1.218-0.193-0.277-0.382-0.557-0.553-0.849-0.221-0.378-0.428-0.766-0.586-1.175-0.061-0.157-0.118-0.323-0.045-0.511 0.062-0.158 0.161-0.273 0.278-0.381 0.676-0.622 1.328-1.269 1.959-1.937 0.369-0.39 0.572-0.849 0.466-1.397-0.067-0.348-0.254-0.642-0.501-0.893-0.959-0.971-1.919-1.941-2.885-2.904-0.279-0.278-0.55-0.57-0.93-0.727-0.293-0.12-0.594-0.14-0.891-0.075-0.358 0.079-0.659 0.286-0.916 0.543-0.691 0.69-1.395 1.367-2.064 2.079-0.315 0.335-0.521 0.739-0.653 1.174-0.099 0.329-0.126 0.673-0.139 1.018-0.013 0.35 0.030 0.696 0.062 1.042 0.008 0.086-0.009 0.184 0.064 0.256 0.007 0.186 0.054 0.366 0.099 0.544 0.105 0.416 0.229 0.826 0.368 1.232 0.173 0.503 0.373 0.994 0.587 1.48 0.233 0.53 0.492 1.047 0.771 1.554 0.404 0.734 0.843 1.446 1.323 2.132 0.347 0.495 0.711 0.978 1.085 1.454 0.781 0.992 1.625 1.926 2.537 2.798 0.586 0.561 1.2 1.090 1.837 1.592 0.626 0.494 1.275 0.955 1.943 1.39 0.527 0.343 1.069 0.659 1.62 0.962 0.454 0.249 0.914 0.485 1.383 0.705 0.229 0.107 0.464 0.201 0.697 0.3 0.009 0.024 0.027 0.042 0.051 0.049 0.21 0.064 0.408 0.161 0.615 0.236 0.298 0.108 0.598 0.208 0.9 0.301 0.381 0.118 0.773 0.204 1.167 0.271 0.53 0.091 1.066 0.132 1.605 0.079 0.094-0.003 0.193 0.022 0.277-0.046 0 0 0-0 0-0 0.122 0.014 0.227-0.049 0.339-0.077 0.006-0.011-0-0.019-0.006-0.028 0.002-0 0.003-0 0.005-0.001-0 0-0 0-0 0 0 0.009 0.001 0.019 0.001 0.028 0.272-0.047 0.507-0.182 0.743-0.315 0.322-0.183 0.591-0.431 0.83-0.709 0.132-0.154 0.296-0.279 0.402-0.455 0-0 0-0 0-0 0.031-0.033 0.060-0.068 0.093-0.098 0.379-0.351 0.757-0.703 1.113-1.077 0.261-0.273 0.474-0.573 0.586-0.945 0.092-0.303 0.065-0.594-0.036-0.878-0.104-0.291-0.296-0.533-0.515-0.752zM3.518 10.044c0.1-0.091 0.201-0.182 0.321-0.245 0.254-0.132 0.45-0.1 0.684 0.112 0.499 0.451 0.956 0.943 1.429 1.42 0.584 0.589 1.171 1.175 1.757 1.763 0.11 0.11 0.212 0.227 0.281 0.369 0.030 0.062 0.045 0.123 0.044 0.189 0.007 0.15-0.073 0.266-0.158 0.376-0.057 0.075-0.131 0.136-0.19 0.21-0.070 0.087-0.123 0.072-0.197-0.002-0.657-0.662-1.317-1.32-1.976-1.979-0.665-0.665-1.328-1.332-1.996-1.994-0.085-0.084-0.088-0.138-0.001-0.218zM17.756 30.946c-0.448-0.057-0.892-0.132-1.327-0.251-0.494-0.135-0.983-0.292-1.454-0.497-0.039-0.017-0.078-0.032-0.118-0.007-0.016-0.054-0.066-0.065-0.11-0.083-0.227-0.096-0.454-0.193-0.676-0.299-0.755-0.364-1.494-0.755-2.212-1.187-0.504-0.303-0.994-0.624-1.473-0.964-0.59-0.418-1.161-0.86-1.714-1.326-0.466-0.391-0.914-0.801-1.35-1.223-0.395-0.382-0.768-0.787-1.133-1.199-0.471-0.531-0.926-1.076-1.354-1.644-0.561-0.744-1.097-1.505-1.574-2.309-0.306-0.516-0.593-1.040-0.859-1.578-0.178-0.361-0.341-0.729-0.498-1.099-0.224-0.53-0.41-1.073-0.577-1.624-0.113-0.373-0.189-0.756-0.244-1.142-0.060-0.413-0.035-0.828-0.029-1.242 0.001-0.080 0.014-0.163 0.031-0.243 0.094-0.435 0.308-0.801 0.624-1.111 0.217-0.214 0.43-0.43 0.645-0.644 0.093-0.093 0.185-0.187 0.279-0.278 0.096-0.094 0.119-0.094 0.213-0.004 0.018 0.017 0.035 0.035 0.053 0.052 1.274 1.275 2.55 2.55 3.825 3.825 0.017 0.017 0.034 0.036 0.052 0.052 0.067 0.057 0.072 0.111 0.003 0.174-0.077 0.069-0.144 0.146-0.225 0.21-0.050 0.039-0.105 0.081-0.095 0.158v0.001h-0.001c-0.058-0.006-0.085 0.042-0.121 0.073-0.158 0.131-0.298 0.282-0.453 0.417-0.604 0.525-0.814 1.19-0.541 1.959 0.088 0.248 0.205 0.484 0.323 0.718 0.388 0.772 0.864 1.491 1.388 2.175 0.492 0.642 1.029 1.245 1.585 1.833 0.029 0.030 0.054 0.077 0.111 0.053-0.021 0.080 0.046 0.115 0.088 0.158 0.77 0.795 1.602 1.519 2.492 2.177 0.445 0.329 0.897 0.652 1.382 0.921 0.359 0.199 0.727 0.381 1.087 0.577 0.441 0.239 0.911 0.28 1.39 0.091 0.286-0.112 0.516-0.302 0.73-0.512 0.303-0.295 0.599-0.596 0.898-0.896 0.122-0.122 0.121-0.123 0.248 0.003 1.286 1.286 2.572 2.573 3.858 3.859 0.017 0.017 0.034 0.035 0.052 0.052 0.053 0.049 0.054 0.096 0 0.146-0.376 0.35-0.7 0.75-1.064 1.111-0.29 0.288-0.642 0.461-1.043 0.546-0.37 0.078-0.739 0.072-1.113 0.024zM17.712 24.452c-0.111-0.111-0.113-0.112 0.002-0.22 0.154-0.146 0.307-0.299 0.611-0.303 0.123-0.005 0.254 0.106 0.377 0.229 0.825 0.824 1.649 1.649 2.473 2.473 0.255 0.255 0.514 0.508 0.763 0.769 0.307 0.321 0.319 0.6 0.035 0.934-0.198 0.232-0.156 0.223-0.36 0.019-1.3-1.301-2.601-2.601-3.901-3.901zM13.293 25.17c0 0 0.001 0 0.001 0.001s-0-0-0-0-0.001-0.001-0.001-0.001-0.001-0-0.001-0.001 0-0.001 0-0.001c0 0.001 0.001 0.001 0.001 0.002zM14.498 31.063c0 0 0 0 0 0l0.002 0.002c-0.001-0-0.002-0-0.002-0s0-0 0.001-0c0-0.001-0-0.001-0-0.001zM21.174 30.471c0-0 0.001-0.001 0.001-0.001s0-0 0-0.001 0.002-0 0.003-0c-0.001 0-0.002 0.002-0.004 0.002-0 0-0 0-0 0z"
				></path>
				<path
					d="M21.827 6.037c-0.472-0.716-0.935-1.438-1.393-2.162-0.208-0.329-0.481-0.509-0.881-0.493-0.349 0.014-0.699 0.003-1.048 0.003-1.261 0-2.522 0.001-3.783 0-0.327-0.001-0.578 0.138-0.751 0.409-0.489 0.768-0.975 1.537-1.459 2.307-0.082 0.13-0.166 0.257-0.166 0.427 0.004 1.68 0 3.36 0.002 5.040 0 0.495 0.362 0.851 0.855 0.851 1.322 0.001 2.645 0 3.968 0v-0.002c1.314 0 2.629-0.010 3.943 0.005 0.544 0.006 0.95-0.418 0.946-0.937-0.013-1.56-0.009-3.122 0.003-4.682 0.002-0.291-0.080-0.529-0.236-0.766zM18.44 11.309c0.004-0.784-0.008-1.569 0.008-2.353 0.006-0.285-0.112-0.458-0.339-0.6-0.399-0.252-0.786-0.524-1.186-0.775-0.148-0.093-0.279-0.223-0.472-0.243-0.304-0.031-0.549 0.171-0.55 0.477-0.003 1.151-0.003 2.301-0.004 3.451 0 0.18 0 0.178-0.185 0.178-0.752 0.001-1.504-0.001-2.255 0.005-0.115 0.001-0.143-0.032-0.143-0.144 0.004-1.368 0.004-2.736-0.001-4.104 0-0.122 0.035-0.148 0.152-0.147 1.245 0.004 2.489 0.003 3.734 0.003v-0.004c1.212 0 2.423-0.001 3.635 0.002 0.291 0.001 0.247-0.041 0.248 0.248 0.002 1.335 0 2.67 0.003 4.005 0 0.102-0.018 0.143-0.133 0.142-0.793-0.006-1.586-0.006-2.378 0-0.113 0.001-0.135-0.037-0.134-0.141zM17.672 4.461c-0.001-0.099 0.024-0.136 0.13-0.135 0.562 0.004 1.124 0.002 1.687 0.001 0.070 0 0.118 0.016 0.16 0.083 0.323 0.52 0.652 1.035 0.977 1.553 0.057 0.090 0.039 0.117-0.076 0.117-0.459 0.001-0.919 0.001-1.378 0.001-0.456 0-0.911-0.003-1.367 0.002-0.101 0.001-0.134-0.029-0.133-0.133 0.004-0.496 0.004-0.993 0-1.489zM14.727 4.432c0.039-0.062 0.089-0.084 0.164-0.083 0.566 0.003 1.133 0.004 1.698 0.001 0.076-0.001 0.109 0.014 0.109 0.1 0.001 0.472 0.008 0.943 0.011 1.415 0.001 0.186-0.001 0.186-0.179 0.186h-2.816c0.346-0.553 0.68-1.086 1.013-1.618zM17.349 11.476c-0.123-0.007-0.247-0.007-0.369-0.001-0.095 0.005-0.118-0.035-0.117-0.123 0.003-0.418 0.001-0.837 0.001-1.256 0-0.414 0-0.829 0.001-1.243 0-0.040-0.013-0.094 0.029-0.11 0.023-0.009 0.066 0.022 0.095 0.042 0.133 0.088 0.262 0.181 0.395 0.269 0.064 0.043 0.089 0.096 0.089 0.175-0.003 0.705-0.003 1.411 0.001 2.117 0 0.094-0.025 0.136-0.125 0.13z"
				></path>
			</symbol>
			<symbol id="icon-e4" viewBox="0 0 24 32">
				<path
					d="M7.028 15.564c0.060 0.014 0.121 0.027 0.181 0.039v3.743h0.776v-3.64c0.143 0.010 0.287 0.016 0.431 0.016 1.903-0.005 3.697-0.89 4.86-2.397s1.564-3.466 1.086-5.309l2.488-1.559 1.555 0.124c0.149 0.012 0.291-0.062 0.366-0.191l0.784-1.341 1.291 0.003c0.137 0 0.263-0.072 0.333-0.189l0.789-1.321 1.222 0.037c0.187 0.005 0.351-0.124 0.391-0.306l0.476-2.194c0.042-0.192-0.066-0.384-0.251-0.448l-0.018-0.007c-0.014-0.005-0.029-0.009-0.043-0.012l-2.682-0.602c-0.1-0.022-0.204-0.005-0.291 0.050l-8.094 5.073c-1.873-1.805-4.678-2.238-7.008-1.082s-3.681 3.653-3.376 6.236c0.305 2.583 2.201 4.696 4.737 5.277zM21.047 0.802l2.169 0.487-0.326 1.504-1.128-0.034c-0.141-0.004-0.273 0.068-0.345 0.189l-0.793 1.327-1.292-0.003c-0.138 0.001-0.265 0.074-0.336 0.192l-0.773 1.323-1.44-0.115c-0.083-0.007-0.166 0.014-0.237 0.058l-2.435 1.526c-0.225-0.555-0.53-1.075-0.904-1.542l7.839-4.914zM5.548 5.007c2.143-1.339 4.929-1.009 6.699 0.794 0.007 0.015 0.015 0.030 0.024 0.044 0.035 0.056 0.085 0.103 0.143 0.135 1.505 1.684 1.799 4.129 0.733 6.121s-3.261 3.106-5.497 2.789-4.037-1.997-4.507-4.206c-0.47-2.209 0.491-4.477 2.405-5.676z"
				></path>
				<path
					d="M7.032 12.539c0.187 0.043 0.379 0.065 0.571 0.065 1.348 0 2.461-1.052 2.537-2.397s-0.911-2.516-2.249-2.669c-1.339-0.153-2.564 0.767-2.792 2.094s0.62 2.603 1.933 2.906zM6.665 8.582c0.278-0.176 0.601-0.269 0.93-0.269 0.133 0 0.266 0.015 0.396 0.045 0.817 0.187 1.387 0.926 1.363 1.763s-0.637 1.541-1.464 1.681-1.636-0.324-1.934-1.107c-0.298-0.783-0.001-1.668 0.709-2.113v-0z"
				></path>
				<path
					d="M0.621 24.905l1.494-1.088v7.794c0 0.214 0.174 0.388 0.388 0.388h10.189c0.214 0 0.388-0.174 0.388-0.388v-7.794l1.494 1.087c0.112 0.084 0.26 0.102 0.389 0.046s0.216-0.177 0.23-0.317c0.014-0.139-0.048-0.276-0.163-0.356l-1.951-1.42v-2.289c0-0.215-0.174-0.388-0.388-0.388s-0.388 0.174-0.388 0.388v1.725l-4.478-3.26c-0.136-0.099-0.321-0.099-0.457 0l-7.205 5.245c-0.114 0.081-0.177 0.217-0.163 0.356s0.102 0.26 0.23 0.317c0.129 0.056 0.277 0.039 0.389-0.045v-0zM7.598 19.826l4.706 3.427v7.971h-9.413v-7.971l4.707-3.427z"
				></path>
				<path
					d="M7.598 26.978c0.39 0.001 0.706 0.316 0.709 0.706s-0.311 0.709-0.701 0.714c-0.003 0-0.005-0-0.008-0s-0.005 0-0.008 0c-0.389-0.005-0.702-0.321-0.703-0.71 0-0.215-0.174-0.388-0.388-0.388s-0.388 0.174-0.388 0.388c0.001 0.671 0.451 1.259 1.098 1.435v0.317c0 0.214 0.174 0.388 0.388 0.388s0.388-0.174 0.388-0.388v-0.317c0.72-0.195 1.184-0.892 1.086-1.631s-0.728-1.291-1.474-1.291c-0.392 0-0.71-0.318-0.71-0.71s0.318-0.71 0.71-0.71 0.71 0.318 0.71 0.71c0 0.214 0.174 0.388 0.388 0.388s0.388-0.174 0.388-0.388c-0.001-0.671-0.451-1.259-1.098-1.435v-0.611c0-0.214-0.174-0.388-0.388-0.388s-0.388 0.174-0.388 0.388v0.611c-0.72 0.195-1.184 0.892-1.086 1.631s0.728 1.291 1.474 1.291z"
				></path>
			</symbol>
			<symbol id="icon-e5" viewBox="0 0 25 32">
				<path
					d="M12.271 0c-0.973 0.001-1.762 0.79-1.763 1.763v0.949h-8.746c-0.973 0.001-1.762 0.79-1.763 1.763v12.203c0.001 0.973 0.79 1.762 1.763 1.763h8.746v13.153c0 0.225 0.182 0.407 0.407 0.407h2.712c0.225 0 0.407-0.182 0.407-0.407v-13.153h8.746c0.973-0.001 1.762-0.79 1.763-1.763v-12.203c-0.001-0.973-0.79-1.762-1.763-1.763h-8.746v-0.949c-0.001-0.973-0.79-1.762-1.763-1.763zM11.322 1.763c0-0.524 0.425-0.949 0.949-0.949s0.949 0.425 0.949 0.949v0.949h-1.898v-0.949zM13.22 31.186h-1.898v-12.746h1.898v12.746zM23.729 4.475v12.203c-0.001 0.524-0.425 0.949-0.949 0.949h-21.017c-0.524-0.001-0.949-0.425-0.949-0.949v-12.203c0.001-0.524 0.425-0.949 0.949-0.949h21.017c0.524 0.001 0.949 0.425 0.949 0.949z"
				></path>
				<path
					d="M5.987 8.881h-1.412c-0.138 0-0.276 0.065-0.276 0.195v2.583c0 0.13 0.159 0.195 0.317 0.195s0.317-0.065 0.317-0.195v-1.050h0.614c0.134 0 0.191-0.13 0.191-0.24 0-0.13-0.069-0.248-0.191-0.248h-0.614v-0.688h1.054c0.122 0 0.191-0.13 0.191-0.28 0-0.13-0.057-0.273-0.191-0.273z"
				></path>
				<path
					d="M7.329 8.881c-0.561 0-0.997 0.26-0.997 0.96v1.078c0 0.7 0.435 0.96 0.997 0.96s1.001-0.26 1.001-0.96v-1.078c0-0.7-0.439-0.96-1.001-0.96zM7.695 10.919c0 0.281-0.138 0.407-0.366 0.407s-0.362-0.126-0.362-0.407v-1.078c0-0.281 0.134-0.407 0.362-0.407s0.366 0.126 0.366 0.407v1.078z"
				></path>
				<path
					d="M10.4 11.879c0.187 0 0.399-0.171 0.399-0.329 0-0.026-0.007-0.051-0.020-0.073l-0.496-0.899c0.285-0.11 0.492-0.37 0.492-0.826 0-0.663-0.444-0.87-1.001-0.87h-0.842c-0.052-0.002-0.102 0.018-0.139 0.054s-0.057 0.086-0.057 0.137v2.587c0 0.13 0.159 0.195 0.317 0.195s0.318-0.065 0.318-0.195v-0.98h0.268l0.557 1.082c0.039 0.076 0.118 0.122 0.203 0.118zM9.774 10.191h-0.403v-0.757h0.403c0.228 0 0.366 0.094 0.366 0.378s-0.139 0.378-0.366 0.378z"
				></path>
				<path
					d="M12.751 11.326c-0.378 0-0.501-0.301-0.691-0.301-0.155 0-0.277 0.203-0.277 0.342 0 0.268 0.448 0.529 0.98 0.529 0.59 0 1.017-0.317 1.017-0.903 0-1.025-1.289-0.948-1.289-1.355 0-0.126 0.118-0.244 0.407-0.244 0.333 0 0.411 0.155 0.557 0.155 0.179 0 0.252-0.224 0.252-0.334 0-0.317-0.594-0.358-0.809-0.358-0.508 0-1.041 0.232-1.041 0.842 0 0.952 1.289 0.867 1.289 1.359-0 0.195-0.208 0.269-0.395 0.269z"
				></path>
				<path
					d="M15.070 8.857c-0.187 0-0.37 0.069-0.415 0.212l-0.757 2.481c-0.004 0.015-0.007 0.029-0.008 0.045 0 0.15 0.232 0.26 0.407 0.26 0.102 0 0.183-0.033 0.208-0.118l0.138-0.508h0.858l0.138 0.508c0.024 0.086 0.106 0.118 0.207 0.118 0.175 0 0.407-0.11 0.407-0.26-0.001-0.015-0.004-0.030-0.008-0.045l-0.761-2.481c-0.045-0.142-0.228-0.211-0.415-0.211zM14.773 10.74l0.297-1.090 0.297 1.090h-0.594z"
				></path>
				<path
					d="M17.124 9.072c0-0.134-0.159-0.191-0.317-0.191s-0.317 0.057-0.317 0.191v2.587c0 0.13 0.139 0.195 0.277 0.195h1.285c0.122 0 0.183-0.139 0.183-0.277s-0.061-0.276-0.183-0.276h-0.927v-2.229z"
				></path>
				<path
					d="M18.767 11.855h1.448c0.134 0 0.191-0.142 0.191-0.273 0-0.151-0.069-0.281-0.191-0.281h-1.090v-0.691h0.61c0.134 0 0.191-0.13 0.191-0.24 0-0.13-0.069-0.248-0.191-0.248h-0.61v-0.688h1.090c0.122 0 0.191-0.13 0.191-0.28 0-0.13-0.057-0.273-0.191-0.273h-1.448c-0.139 0-0.277 0.065-0.277 0.195v2.583c0 0.13 0.138 0.195 0.277 0.195z"
				></path>
			</symbol>
			<symbol id="icon-e6" viewBox="0 0 38 32">
				<path
					d="M4.679 28.257c0.034 0.008 0.068 0.011 0.102 0.011h17.62c2.52 3.584 7.296 4.763 11.194 2.763s5.726-6.567 4.284-10.704-5.711-6.579-10.008-5.724v-14.12c0-0.266-0.216-0.482-0.482-0.482h-21.381c-0.264 0-0.479 0.213-0.482 0.477l-0.194 19.232h-4.85c-0.266 0-0.482 0.215-0.482 0.482v2.985c0 2.7 2.072 4.915 4.679 5.081zM29.589 15.397c4.32 0 7.823 3.502 7.823 7.823s-3.502 7.823-7.823 7.823c-4.321 0-7.823-3.502-7.823-7.823 0.005-4.318 3.504-7.818 7.823-7.823zM6.485 0.964h20.423v13.888c-2.44 0.781-4.417 2.588-5.414 4.948s-0.913 5.037 0.228 7.331c-1.66-0.51-2.873-2.090-2.873-3.954v-2.985c0-0.266-0.216-0.482-0.482-0.482h-12.071l0.189-18.746zM0.964 20.673h16.921v2.503c-0.004 1.628 0.766 3.16 2.075 4.128h-14.969c-2.221 0-4.028-1.852-4.028-4.128v-2.503z"
				></path>
				<path
					d="M10.911 5.325h3.754c0.266 0 0.482-0.216 0.482-0.482s-0.216-0.482-0.482-0.482h-3.754c-0.266 0-0.482 0.216-0.482 0.482s0.216 0.482 0.482 0.482z"
				></path>
				<path
					d="M10.911 10.615h10.919c0.266 0 0.482-0.216 0.482-0.482s-0.215-0.482-0.482-0.482h-10.919c-0.266 0-0.482 0.216-0.482 0.482s0.216 0.482 0.482 0.482z"
				></path>
				<path
					d="M22.312 15.423c0-0.266-0.215-0.482-0.482-0.482h-10.919c-0.266 0-0.482 0.216-0.482 0.482s0.216 0.482 0.482 0.482h10.919c0.266 0 0.482-0.216 0.482-0.482z"
				></path>
				<path
					d="M24.77 23.145h0.929v4.138c0 0.266 0.216 0.482 0.482 0.482h6.814c0.266 0 0.482-0.215 0.482-0.482v-4.138h0.929c0.209 0 0.394-0.134 0.458-0.333s-0.006-0.416-0.175-0.539l-4.818-3.508c-0.169-0.123-0.398-0.123-0.567 0l-4.818 3.508c-0.169 0.123-0.239 0.34-0.175 0.539s0.25 0.333 0.458 0.333zM29.589 19.752l3.344 2.434c-0.24 0.032-0.418 0.236-0.418 0.478v4.138h-5.85v-4.138c0-0.242-0.179-0.446-0.418-0.478l3.344-2.434z"
				></path>
			</symbol>
			<symbol id="icon-f1" viewBox="0 0 39 32">
				<path
					d="M38.219 27.247c-0.268 0-0.488 0.218-0.488 0.488v0.569c0 0.402-0.325 0.729-0.727 0.732h-0.020v-1.606c0.952-0.228 1.624-1.078 1.627-2.058v-2.167c0-1.17-0.948-2.115-2.115-2.115s-2.115 0.945-2.115 2.115v2.168c0 0.979 0.673 1.83 1.627 2.058v4.057c0 0.27 0.218 0.488 0.488 0.488s0.488-0.218 0.488-0.488v-1.476h0.020c0.94-0.006 1.7-0.768 1.702-1.708v-0.569c0-0.27-0.218-0.488-0.488-0.488h0.001zM35.358 25.374v-2.168c0-0.63 0.509-1.139 1.139-1.139 0.628 0 1.139 0.508 1.139 1.139v2.168c-0.002 0.439-0.255 0.839-0.651 1.027v-0.407c0-0.268-0.22-0.488-0.488-0.488s-0.488 0.22-0.488 0.488v0.407c-0.399-0.187-0.651-0.588-0.651-1.027zM33.862 28.612v-17.529c0-0.271-0.22-0.488-0.488-0.488h-10.371c-0.27 0-0.488 0.217-0.488 0.488v20.428h0.976v-6.113h2.481v6.114h0.976v-6.113h2.481v3.18c-0.832 0.158-1.423 0.901-1.388 1.747s0.686 1.539 1.528 1.627c0.842 0.089 1.622-0.454 1.832-1.275s-0.214-1.671-0.996-1.997v-3.282h2.481v3.232c-0.809 0.257-1.308 1.069-1.171 1.907 0.138 0.838 0.87 1.448 1.72 1.433 0.849-0.016 1.558-0.651 1.666-1.494 0.107-0.842-0.42-1.635-1.238-1.863v-0.002zM29.746 30.989c-0.405 0-0.732-0.328-0.732-0.732s0.327-0.732 0.732-0.732c0.403 0 0.732 0.327 0.732 0.732-0.002 0.404-0.329 0.732-0.732 0.732zM32.886 20.965h-2.481v-2.481h2.481v2.481zM29.429 15.028v2.481h-2.481v-2.481h2.481zM26.948 14.052v-2.481h2.481v2.481h-2.481zM25.972 17.508h-2.481v-2.481h2.481v2.481zM25.972 18.485v2.481h-2.481v-2.481h2.481zM26.948 18.485h2.481v2.481h-2.481v-2.481zM32.886 17.508h-2.481v-2.481h2.481v2.481zM32.886 14.052h-2.481v-2.481h2.481v2.481zM25.972 11.571v2.481h-2.481v-2.481h2.481zM23.491 24.422v-2.481h2.481v2.481h-2.481zM26.948 24.422v-2.481h2.481v2.481h-2.481zM30.405 24.422v-2.481h2.481v2.481h-2.481zM33.406 30.989c-0.405 0-0.732-0.328-0.732-0.732s0.327-0.732 0.732-0.732c0.403 0 0.732 0.327 0.732 0.732-0.002 0.404-0.329 0.732-0.732 0.732z"
				></path>
				<path
					d="M38.604 31.023h-17.757v-26.854c0-0.27-0.22-0.488-0.488-0.488h-1.816v-0.4h0.664c0.27 0 0.488-0.218 0.488-0.488v-2.305c0-0.27-0.218-0.488-0.488-0.488h-11.523c-0.27 0-0.488 0.218-0.488 0.488v2.304c0 0.27 0.218 0.488 0.488 0.488h0.664v0.4h-1.816c-0.27 0-0.488 0.218-0.488 0.488v24.449c-0.488 0.142-0.887 0.492-1.088 0.958s-0.185 0.997 0.044 1.448h-0.612c0.364-0.717 0.176-1.593-0.451-2.099s-1.521-0.507-2.147 0c-0.626 0.506-0.815 1.381-0.451 2.099h-0.85c-0.268 0-0.488 0.22-0.488 0.488 0 0.271 0.22 0.488 0.488 0.488h38.116c0.268 0 0.488-0.217 0.488-0.488 0-0.268-0.22-0.488-0.488-0.488v-0.001zM2.863 29.526c0.403 0 0.732 0.327 0.732 0.732s-0.329 0.732-0.732 0.732c-0.405 0-0.732-0.328-0.732-0.732s0.327-0.732 0.732-0.732zM10.184 29.526c0.403 0 0.732 0.327 0.732 0.732s-0.329 0.732-0.732 0.732c-0.405 0-0.732-0.328-0.732-0.732s0.327-0.732 0.732-0.732zM10.477 28.577v-3.176h2.481v5.625h-1.25c0.244-0.48 0.246-1.049 0.002-1.534s-0.7-0.822-1.233-0.913v-0.002zM12.957 4.659v2.481h-2.481v-2.481h2.481zM19.871 24.425h-2.481v-2.481h2.481v2.481zM13.934 14.054v-2.481h2.481v2.481h-2.481zM16.414 15.030v2.481h-2.481v-2.481h2.481zM12.957 14.054h-2.481v-2.481h2.481v2.481zM12.957 15.030v2.481h-2.481v-2.481h2.481zM12.957 18.487v2.481h-2.481v-2.481h2.481zM13.934 18.487h2.481v2.481h-2.481v-2.481zM16.414 21.944v2.481h-2.481v-2.481h2.481zM19.871 20.968h-2.481v-2.481h2.481v2.481zM19.871 17.511h-2.481v-2.481h2.481v2.481zM19.871 14.054h-2.481v-2.481h2.481v2.481zM19.871 10.597h-2.481v-2.481h2.481v2.481zM16.414 10.597h-2.481v-2.481h2.481v2.481zM13.934 7.14v-2.481h2.481v2.481h-2.481zM12.957 8.116v2.481h-2.481v-2.481h2.481zM9.501 10.597h-2.481v-2.481h2.481v2.481zM9.501 11.573v2.481h-2.481v-2.481h2.481zM9.501 15.030v2.481h-2.481v-2.481h2.481zM9.501 18.487v2.481h-2.481v-2.481h2.481zM9.501 21.944v2.481h-2.481v-2.481h2.481zM10.477 21.944h2.481v2.481h-2.481v-2.481zM13.934 25.401h2.481v5.625h-2.481v-5.625zM17.39 25.401h2.481v5.625h-2.481v-5.625zM19.871 7.14h-2.481v-2.481h2.481v2.481zM8.172 0.976h10.547v1.328h-10.547v-1.328zM9.324 3.28h8.243v0.4h-8.243v-0.4zM9.501 4.657v2.481h-2.481v-2.481h2.481zM6.523 29.525c0.403 0 0.732 0.327 0.732 0.732s-0.329 0.732-0.732 0.732c-0.405 0-0.732-0.328-0.732-0.732s0.327-0.732 0.732-0.732zM7.020 28.622v-3.224h2.481v3.294c-0.431 0.185-0.765 0.542-0.925 0.984-0.159 0.441-0.129 0.929 0.084 1.347h-0.613c0.228-0.447 0.244-0.976 0.047-1.44s-0.591-0.815-1.074-0.96l-0.001-0.002z"
				></path>
			</symbol>
			<symbol id="icon-f2" viewBox="0 0 32 32">
				<path
					d="M29.867 31.963h-28.196v-4.488h28.196v4.488zM2.563 31.072h26.413v-2.705h-26.413v2.705z"
				></path>
				<path
					d="M26.943 28.367h-22.348v-2.66h22.348v2.66zM5.487 27.475h20.565v-0.877h-20.565v0.877z"
				></path>
				<path
					d="M11.022 26.609h-4.475v-17.882h4.475v17.882zM7.438 25.718h2.692v-16.099h-2.692v16.099z"
				></path>
				<path
					d="M21.388 26.609h-11.236v-20.345h11.236v20.345zM11.043 25.718h9.453v-18.562h-9.453v18.562z"
				></path>
				<path
					d="M24.992 26.609h-4.475v-17.882h4.475v17.882zM21.409 25.718h2.692v-16.099h-2.692v16.099z"
				></path>
				<path d="M0 31.109h31.539v0.891h-31.539v-0.891z"></path>
				<path
					d="M19.781 7.18h-8.023v-4.593h8.023v4.593zM12.649 6.289h6.24v-2.811h-6.24v2.811z"
				></path>
				<path d="M15.324 0h0.891v2.97h-0.891v-2.97z"></path>
				<path d="M13.615 4.365h4.308v0.891h-4.308v-0.891z"></path>
				<path d="M12.898 8.68h0.891v15.894h-0.891v-15.894z"></path>
				<path d="M15.324 8.68h0.891v15.894h-0.891v-15.894z"></path>
				<path d="M17.75 8.68h0.891v15.894h-0.891v-15.894z"></path>
			</symbol>
			<symbol id="icon-f3" viewBox="0 0 33 32">
				<path
					d="M0.425 32h32.552c0.234 0 0.425-0.19 0.425-0.425s-0.19-0.425-0.425-0.425h-1.466v-13.184c0.002-2.839-2.297-5.142-5.136-5.145-0.388-0-0.776 0.043-1.154 0.13v-2.539c-0-0.177-0.11-0.336-0.277-0.398l-2.030-0.754v-8.836c0-0.234-0.19-0.425-0.425-0.425h-1.856c-0.235 0-0.425 0.19-0.425 0.425v7.832l-3.145-1.168c-0.22-0.082-0.464 0.030-0.546 0.25-0.018 0.047-0.027 0.097-0.027 0.148v2.411l-7.366-2.807c-0.219-0.084-0.464 0.026-0.548 0.246-0.018 0.048-0.028 0.099-0.028 0.151v5.461c-2.783-0.579-5.507 1.208-6.086 3.991-0.072 0.344-0.108 0.695-0.108 1.046v13.167h-1.93c-0.234 0-0.425 0.19-0.425 0.425s0.19 0.425 0.425 0.425zM9.145 31.151h-3.291v-6.387h3.291v6.387zM16.94 13.689c2.27 0.003 4.147 1.769 4.287 4.035-0.004 0.081-0.006 0.162-0.006 0.244v13.184h-8.576v-13.167c0.003-2.371 1.924-4.293 4.296-4.296zM28.118 31.151h-3.291v-6.347h3.291v6.347zM30.661 17.967v13.184h-1.693v-6.771c0-0.235-0.19-0.425-0.425-0.425h-4.14c-0.235 0-0.425 0.19-0.425 0.425v6.771h-1.908v-13.167h0.015c0-0.090-0.002-0.179-0.007-0.268 0.141-2.368 2.175-4.174 4.543-4.033 2.268 0.135 4.038 2.012 4.041 4.284h0zM21.056 0.849h1.007v8.096l-1.007-0.374v-7.723zM24.37 10.708v2.516c-1.218 0.516-2.192 1.479-2.722 2.69-0.765-1.735-2.42-2.909-4.31-3.059v-4.759l7.031 2.611zM9.398 8.103l7.092 2.703v2.055c-1.88 0.168-3.518 1.349-4.27 3.080-0.544-1.248-1.558-2.231-2.822-2.736l0-5.101zM3.204 17.984c0-2.372 1.923-4.296 4.296-4.296s4.296 1.923 4.296 4.296v13.167h-1.801v-6.812c0-0.235-0.19-0.425-0.425-0.425h-4.14c-0.234 0-0.425 0.19-0.425 0.425v6.812h-1.801v-13.167z"
				></path>
			</symbol>
			<symbol id="icon-r" viewBox="0 0 36 32">
				<path
					d="M32.8 0h-29.291c-1.937 0.002-3.507 1.572-3.509 3.509v24.982c0.002 1.937 1.572 3.507 3.509 3.509h29.291c1.937-0.002 3.507-1.572 3.509-3.509v-24.982c-0.002-1.937-1.572-3.507-3.509-3.509zM32.8 31.085h-29.291c-1.432-0.002-2.592-1.162-2.594-2.593v-19.108h34.478v19.108c-0.002 1.432-1.162 2.592-2.593 2.593zM35.394 8.468h-34.478v-4.959c0.001-1.432 1.162-2.592 2.594-2.594h29.291c1.432 0.001 2.592 1.162 2.593 2.594v4.959z"
				></path>
				<path
					d="M10.184 2.96h-0.006c-0.975-0.002-1.767 0.788-1.769 1.763s0.788 1.767 1.763 1.769h0.006c0.975 0.002 1.767-0.788 1.768-1.763s-0.788-1.767-1.763-1.768zM10.777 5.329c-0.159 0.159-0.375 0.248-0.599 0.247h-0.003c-0.47-0.001-0.85-0.382-0.849-0.852s0.382-0.85 0.852-0.849h0.003c0.344 0.001 0.653 0.209 0.784 0.527s0.057 0.684-0.187 0.926l-0 0z"
				></path>
				<path
					d="M4.308 2.942h-0.006c-0.975-0.002-1.767 0.788-1.769 1.763s0.788 1.767 1.763 1.768h0.005c0.976 0.002 1.767-0.788 1.769-1.763s-0.788-1.767-1.763-1.769zM4.902 5.31c-0.159 0.159-0.375 0.248-0.599 0.247h-0.003c-0.47-0.001-0.85-0.382-0.849-0.852s0.382-0.85 0.852-0.849h0.003c0.344 0.001 0.653 0.209 0.784 0.527s0.057 0.684-0.187 0.926v0z"
				></path>
				<path
					d="M16.059 2.978h-0.005c-0.975-0.002-1.767 0.788-1.769 1.763s0.788 1.767 1.763 1.769h0.006c0.975 0.002 1.767-0.788 1.768-1.763s-0.788-1.767-1.763-1.768zM16.653 5.347c-0.273 0.271-0.693 0.325-1.026 0.133s-0.495-0.585-0.395-0.957c0.1-0.371 0.437-0.629 0.821-0.629h0.003c0.344 0.001 0.653 0.209 0.784 0.527s0.057 0.684-0.187 0.926z"
				></path>
				<path
					d="M11.942 26.679c0 0.253 0.205 0.458 0.458 0.458h11.511c0.253 0 0.458-0.205 0.458-0.458v-7.347h1.926c0.198 0 0.374-0.128 0.435-0.316s-0.005-0.395-0.166-0.512l-8.139-5.926c-0.161-0.117-0.378-0.117-0.539 0l-8.139 5.926c-0.16 0.116-0.227 0.323-0.166 0.512s0.237 0.316 0.435 0.316h1.926l-0 7.347zM11.422 18.417l6.733-4.902 6.733 4.902h-0.978c-0.253 0-0.458 0.205-0.458 0.458v7.347h-10.595v-7.347c0-0.253-0.205-0.458-0.458-0.458h-0.977z"
				></path>
				<path
					d="M18.154 20.274c1.095 0 1.983-0.888 1.983-1.983s-0.888-1.983-1.983-1.983-1.983 0.888-1.983 1.983c0.001 1.095 0.889 1.982 1.983 1.983zM18.154 17.222c0.59 0 1.068 0.478 1.068 1.068s-0.478 1.068-1.068 1.068-1.068-0.478-1.068-1.068c0.001-0.589 0.479-1.067 1.068-1.068z"
				></path>
			</symbol>
			<symbol id="icon-quote" viewBox="0 0 20 20">
				<path
					d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3s1.306 3 2.916 3c2.915 0 0.972 5.799-2.916 5.799v1.4c6.939 0.001 9.658-13.199 2.916-13.199zM13.715 3.401c-1.609 0-2.915 1.343-2.915 3s1.306 3 2.915 3c2.916 0 0.973 5.799-2.915 5.799v1.4c6.938 0.001 9.657-13.199 2.915-13.199z"
				></path>
			</symbol>
			<symbol id="icon-user-light" viewBox="0 0 32 32">
				<path
					d="M28.776 26.623c-1.94-3.298-5.031-5.742-8.709-6.8l-0.105-0.026c2.864-1.477 4.788-4.415 4.788-7.802 0-4.832-3.918-8.75-8.75-8.75s-8.75 3.918-8.75 8.75c0 3.387 1.924 6.324 4.739 7.779l0.049 0.023c-3.783 1.083-6.874 3.528-8.776 6.756l-0.038 0.069c-0.063 0.108-0.101 0.237-0.101 0.376 0 0.414 0.336 0.75 0.75 0.75 0.276 0 0.517-0.149 0.647-0.371l0.002-0.004c2.335-3.988 6.598-6.624 11.477-6.624s9.143 2.636 11.443 6.562l0.034 0.063c0.132 0.225 0.373 0.374 0.649 0.374 0.414 0 0.75-0.336 0.75-0.75 0-0.138-0.037-0.268-0.103-0.379l0.002 0.004zM8.75 12c0-4.004 3.246-7.25 7.25-7.25s7.25 3.246 7.25 7.25c0 4.004-3.246 7.25-7.25 7.25v0c-4.002-0.005-7.245-3.248-7.25-7.25v-0z"
				></path>
			</symbol>
			<symbol id="icon-star-light" viewBox="0 0 32 32">
				<path
					d="M23.408 28.748c-0.354-0-0.683-0.104-0.96-0.283l0.007 0.004-6.304-3.994c-0.042-0.028-0.094-0.044-0.15-0.044s-0.108 0.016-0.151 0.045l0.001-0.001-5.859 3.712c-0.3 0.198-0.669 0.316-1.064 0.316-0.439 0-0.844-0.145-1.17-0.39l0.005 0.004c-0.515-0.377-0.846-0.979-0.846-1.658 0-0.184 0.024-0.362 0.070-0.532l-0.003 0.014 1.689-6.645c0.007-0.026 0.012-0.057 0.012-0.088 0-0.104-0.046-0.197-0.119-0.26l-0-0-5.653-4.705c-0.405-0.339-0.661-0.844-0.661-1.41 0-0.207 0.034-0.406 0.097-0.591l-0.004 0.013c0.225-0.695 0.845-1.199 1.588-1.25l0.006-0 7.383-0.479c0.119-0.010 0.217-0.088 0.257-0.195l0.001-0.002 2.754-6.934c0.266-0.675 0.913-1.144 1.669-1.144s1.403 0.469 1.665 1.132l0.004 0.012 2.754 6.934c0.040 0.109 0.139 0.187 0.256 0.197l0.001 0 7.383 0.479c0.749 0.051 1.369 0.555 1.59 1.237l0.004 0.013c0.059 0.173 0.093 0.371 0.093 0.578 0 0.565-0.256 1.071-0.658 1.408l-0.003 0.002-5.654 4.705c-0.073 0.063-0.119 0.156-0.119 0.26 0 0.031 0.004 0.062 0.012 0.091l-0.001-0.002 1.822 7.165c0.038 0.139 0.059 0.298 0.059 0.462 0 0.608-0.296 1.146-0.752 1.479l-0.005 0.004c-0.289 0.213-0.652 0.341-1.045 0.341h-0zM16 22.933c0.001 0 0.001 0 0.002 0 0.353 0 0.681 0.102 0.958 0.279l-0.007-0.004 6.304 3.994c0.042 0.030 0.094 0.047 0.151 0.047 0.062 0 0.12-0.022 0.165-0.058l-0.001 0c0.084-0.060 0.138-0.157 0.138-0.267 0-0.034-0.005-0.066-0.015-0.097l0.001 0.002-1.822-7.165c-0.036-0.137-0.057-0.293-0.057-0.455 0-0.567 0.255-1.074 0.656-1.413l0.003-0.002 5.653-4.705c0.074-0.061 0.121-0.154 0.121-0.257 0-0.041-0.007-0.080-0.021-0.116l0.001 0.002c-0.033-0.12-0.137-0.209-0.264-0.217l-0.001-0-7.383-0.479c-0.707-0.052-1.298-0.504-1.55-1.128l-0.004-0.012-2.754-6.934c-0.040-0.116-0.148-0.198-0.275-0.198s-0.235 0.082-0.275 0.196l-0.001 0.002-2.754 6.934c-0.257 0.636-0.847 1.088-1.548 1.14l-0.006 0-7.383 0.479c-0.127 0.008-0.232 0.097-0.264 0.215l-0 0.002c-0.013 0.034-0.020 0.073-0.020 0.114 0 0.103 0.047 0.195 0.121 0.256l0.001 0 5.653 4.705c0.404 0.342 0.659 0.849 0.659 1.416 0 0.162-0.021 0.318-0.060 0.468l0.003-0.013-1.689 6.645c-0.013 0.045-0.021 0.096-0.021 0.15 0 0.182 0.089 0.342 0.226 0.441l0.002 0.001c0.078 0.060 0.177 0.096 0.285 0.096 0.097 0 0.188-0.030 0.263-0.080l-0.002 0.001 5.859-3.712c0.269-0.173 0.598-0.275 0.95-0.275 0.001 0 0.002 0 0.002 0h-0z"
				></path>
			</symbol>
			<symbol id="icon-shopping-bag-open-light" viewBox="0 0 32 32">
				<path
					d="M27 5.25h-22c-0.966 0.001-1.749 0.784-1.75 1.75v18c0.001 0.966 0.784 1.749 1.75 1.75h22c0.966-0.001 1.749-0.784 1.75-1.75v-18c-0.001-0.966-0.784-1.749-1.75-1.75h-0zM5 6.75h22c0.138 0 0.25 0.112 0.25 0.25v2.25h-22.5v-2.25c0-0.138 0.112-0.25 0.25-0.25h0zM27 25.25h-22c-0.138-0-0.25-0.112-0.25-0.25v-14.25h22.5v14.25c-0 0.138-0.112 0.25-0.25 0.25h-0zM21.75 14c0 3.176-2.574 5.75-5.75 5.75s-5.75-2.574-5.75-5.75v0c0-0.414 0.336-0.75 0.75-0.75s0.75 0.336 0.75 0.75v0c0 2.347 1.903 4.25 4.25 4.25s4.25-1.903 4.25-4.25v0c0-0.414 0.336-0.75 0.75-0.75s0.75 0.336 0.75 0.75v0z"
				></path>
			</symbol>
			<symbol id="icon-magnifying-glass-light" viewBox="0 0 32 32">
				<path
					d="M28.529 27.47l-5.566-5.566c1.731-1.97 2.787-4.57 2.787-7.417 0-6.221-5.043-11.264-11.264-11.264s-11.264 5.043-11.264 11.264c0 6.221 5.043 11.264 11.264 11.264 2.846 0 5.446-1.056 7.429-2.797l-0.013 0.011 5.566 5.566c0.136 0.136 0.323 0.22 0.53 0.22 0.414 0 0.75-0.336 0.75-0.75 0-0.207-0.084-0.395-0.22-0.53v0zM4.75 14.5c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75c0 5.385-4.365 9.75-9.75 9.75v0c-5.382-0.006-9.744-4.368-9.75-9.749v-0.001z"
				></path>
			</symbol>
			<symbol id="icon-long-arrow-right" viewBox="0 0 28 32">
				<path
					d="M19.439 8.22c0.293-0.293 0.768-0.293 1.061 0l7.28 7.25c0.293 0.293 0.293 0.768 0 1.061l-7.28 7.25c-0.293 0.293-0.768 0.293-1.061 0l-0.442-0.442c-0.293-0.293-0.293-0.768 0-1.061l5.245-5.215h-23.493c-0.414 0-0.75-0.336-0.75-0.75v-0.625c0-0.414 0.336-0.75 0.75-0.75h23.493l-5.245-5.215c-0.293-0.293-0.293-0.768 0-1.061z"
				></path>
			</symbol>
			<symbol id="icon-arrow-right" viewBox="0 0 32 32">
				<path
					d="M4 16c0-0.552 0.448-1 1-1h22c0.552 0 1 0.448 1 1s-0.448 1-1 1h-22c-0.552 0-1-0.448-1-1zM17.293 6.293c0.391-0.391 1.024-0.391 1.414 0l9 9c0.39 0.391 0.39 1.024 0 1.414l-9 9c-0.391 0.39-1.024 0.39-1.414 0s-0.39-1.024 0-1.414l8.293-8.293-8.293-8.293c-0.39-0.391-0.39-1.024 0-1.414z"
				></path>
			</symbol>
			<symbol id="icon-box-01" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M16.133 16l-0.133 12.851"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M27.5 21.917v-11.833c0-0.177-0.047-0.351-0.136-0.504s-0.218-0.279-0.372-0.367l-10.5-5.935c-0.15-0.085-0.32-0.129-0.492-0.129s-0.342 0.045-0.492 0.129l-10.5 5.935c-0.154 0.087-0.282 0.214-0.372 0.367s-0.136 0.327-0.136 0.504v11.833c0 0.177 0.047 0.351 0.136 0.504s0.218 0.279 0.372 0.367l10.5 5.935c0.15 0.085 0.32 0.129 0.492 0.129s0.342-0.045 0.492-0.129l10.5-5.935c0.154-0.087 0.282-0.214 0.372-0.367s0.136-0.327 0.136-0.504v0z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M27.363 9.578l-11.23 6.422-11.495-6.423"
				></path>
			</symbol>
			<symbol id="icon-box-02" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M6 13c0 9 10 16 10 16s10-7 10-16c0-2.652-1.054-5.196-2.929-7.071s-4.419-2.929-7.071-2.929-5.196 1.054-7.071 2.929c-1.875 1.875-2.929 4.419-2.929 7.071z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M16 3v26"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M16 23l-10-10"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M16 17l-8.784-8.784"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M16 11l-6-6"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="miter"
					stroke-linecap="butt"
					stroke-miterlimit="4"
					stroke-width="0.6857"
					d="M16 11l-6-6"
				></path>
			</symbol>
			<symbol id="icon-box-03" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.9143"
					d="M8.948 18l-4.948 4v-16c0-0.265 0.105-0.52 0.293-0.707s0.442-0.293 0.707-0.293h16c0.265 0 0.52 0.105 0.707 0.293s0.293 0.442 0.293 0.707v11c0 0.265-0.105 0.52-0.293 0.707s-0.442 0.293-0.707 0.293h-12.052z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.9143"
					d="M10 18v5c0 0.265 0.105 0.52 0.293 0.707s0.442 0.293 0.707 0.293h12.052l4.948 4v-16c0-0.265-0.105-0.52-0.293-0.707s-0.442-0.293-0.707-0.293h-5"
				></path>
			</symbol>
			<symbol id="icon-box-04" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.9143"
					d="M28 7h-24c-0.552 0-1 0.448-1 1v16c0 0.552 0.448 1 1 1h24c0.552 0 1-0.448 1-1v-16c0-0.552-0.448-1-1-1z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.9143"
					d="M20.999 21h4"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.9143"
					d="M14.999 21h2"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="0.9143"
					d="M2.999 12.106h26"
				></path>
			</symbol>
			<symbol id="icon-box-05" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6"
					d="M19.927 5c1.695 0.456 3.241 1.349 4.482 2.591s2.135 2.787 2.591 4.482"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6"
					d="M18.892 8.865c1.017 0.274 1.945 0.81 2.689 1.554s1.281 1.672 1.554 2.689"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6"
					d="M11.56 15.602c1.037 2.121 2.756 3.832 4.882 4.859 0.156 0.074 0.328 0.106 0.499 0.093s0.337-0.070 0.479-0.167l3.13-2.087c0.138-0.092 0.298-0.149 0.463-0.164s0.332 0.011 0.485 0.077l5.855 2.509c0.199 0.084 0.365 0.231 0.473 0.418s0.153 0.404 0.127 0.619c-0.185 1.448-0.892 2.779-1.987 3.744s-2.505 1.497-3.965 1.497c-4.509 0-8.833-1.791-12.021-4.979s-4.979-7.512-4.979-12.021c0-1.46 0.532-2.87 1.497-3.965s2.296-1.802 3.744-1.987c0.214-0.026 0.432 0.019 0.619 0.127s0.334 0.274 0.418 0.473l2.511 5.86c0.065 0.152 0.091 0.317 0.077 0.481s-0.069 0.322-0.16 0.46l-2.080 3.178c-0.095 0.143-0.151 0.308-0.162 0.479s0.021 0.342 0.095 0.497v0z"
				></path>
			</symbol>
			<symbol id="icon-box-06" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="miter"
					stroke-linecap="butt"
					stroke-miterlimit="10"
					stroke-width="1.6"
					d="M16 28c6.627 0 12-5.373 12-12s-5.373-12-12-12c-6.627 0-12 5.373-12 12s5.373 12 12 12z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6"
					d="M16 9v7h7"
				></path>
			</symbol>
			<symbol id="icon-box-07" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6"
					d="M16 17c2.209 0 4-1.791 4-4s-1.791-4-4-4c-2.209 0-4 1.791-4 4s1.791 4 4 4z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6"
					d="M26 13c0 9-10 16-10 16s-10-7-10-16c0-2.652 1.054-5.196 2.929-7.071s4.419-2.929 7.071-2.929 5.196 1.054 7.071 2.929c1.875 1.875 2.929 4.419 2.929 7.071v0z"
				></path>
			</symbol>
			<symbol id="icon-arrows-left-right-light" viewBox="0 0 32 32">
				<path
					d="M28.629 22.407c-0.002 0.003-0.003 0.005-0.005 0.008-0.029 0.043-0.060 0.081-0.095 0.116v0l-4 4c-0.136 0.136-0.323 0.219-0.53 0.219-0.414 0-0.75-0.336-0.75-0.75 0-0.207 0.084-0.394 0.219-0.53v0l2.72-2.72h-22.189c-0.414 0-0.75-0.336-0.75-0.75s0.336-0.75 0.75-0.75v0h22.189l-2.72-2.72c-0.136-0.136-0.219-0.323-0.219-0.53 0-0.414 0.336-0.75 0.75-0.75 0.207 0 0.394 0.084 0.53 0.219v0l4 4c0.035 0.035 0.066 0.072 0.093 0.113l0.002 0.003c0.002 0.003 0.003 0.005 0.005 0.008 0.023 0.035 0.045 0.075 0.062 0.117l0.002 0.005c0.001 0.003 0.002 0.006 0.003 0.009 0.015 0.037 0.029 0.080 0.038 0.125l0.001 0.005c0 0.002 0.001 0.005 0.001 0.007 0.008 0.041 0.013 0.089 0.013 0.138s-0.005 0.096-0.014 0.143l0.001-0.005c-0 0.002-0.001 0.005-0.001 0.007-0.010 0.050-0.023 0.094-0.040 0.135l0.002-0.005c-0.001 0.003-0.002 0.006-0.003 0.009-0.020 0.047-0.041 0.087-0.066 0.125l0.002-0.003zM3.306 9.715c-0.001 0.003-0.002 0.006-0.003 0.009-0.015 0.037-0.029 0.080-0.038 0.126l-0.001 0.005c-0.001 0.002-0.001 0.005-0.001 0.007-0.008 0.041-0.013 0.089-0.013 0.138s0.005 0.097 0.014 0.143l-0.001-0.005c0 0.002 0.001 0.005 0.001 0.007 0.010 0.050 0.023 0.094 0.040 0.135l-0.002-0.005c0.001 0.003 0.002 0.006 0.003 0.009 0.020 0.047 0.041 0.087 0.066 0.125l-0.002-0.003c0.002 0.003 0.003 0.005 0.005 0.008 0.029 0.043 0.060 0.081 0.095 0.116v0l4 4c0.136 0.136 0.323 0.22 0.531 0.22 0.414 0 0.75-0.336 0.75-0.75 0-0.207-0.084-0.395-0.22-0.531v0l-2.72-2.72h22.189c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-22.189l2.72-2.72c0.136-0.136 0.22-0.323 0.22-0.531 0-0.414-0.336-0.75-0.75-0.75-0.207 0-0.395 0.084-0.531 0.22v0l-3.999 4c-0.035 0.035-0.066 0.072-0.093 0.113l-0.002 0.003c-0.002 0.003-0.003 0.005-0.005 0.008-0.023 0.035-0.045 0.075-0.062 0.117l-0.002 0.005z"
				></path>
			</symbol>
			<symbol id="icon-eye-light" viewBox="0 0 32 32">
				<path
					d="M30.685 15.695c-0.043-0.097-1.083-2.404-3.405-4.726-2.153-2.153-5.858-4.72-11.28-4.72s-9.127 2.567-11.28 4.72c-2.322 2.322-3.362 4.629-3.405 4.726-0.041 0.090-0.065 0.194-0.065 0.304s0.024 0.215 0.067 0.309l-0.002-0.005c0.043 0.097 1.083 2.404 3.405 4.725 2.153 2.153 5.858 4.719 11.28 4.719s9.127-2.566 11.28-4.719c2.322-2.322 3.362-4.628 3.405-4.725 0.041-0.090 0.065-0.194 0.065-0.305s-0.024-0.215-0.067-0.309l0.002 0.005zM16 24.249c-3.922 0-7.348-1.427-10.181-4.241-1.16-1.152-2.152-2.472-2.939-3.919l-0.044-0.089c0.83-1.536 1.823-2.856 2.982-4.008l0.001-0.001c2.833-2.815 6.259-4.242 10.181-4.242s7.348 1.427 10.181 4.242c1.16 1.153 2.152 2.472 2.939 3.92l0.044 0.089c-0.796 1.525-4.784 8.249-13.164 8.249zM16 10.25c-3.176 0-5.75 2.574-5.75 5.75s2.574 5.75 5.75 5.75c3.176 0 5.75-2.574 5.75-5.75v0c-0.004-3.174-2.576-5.746-5.75-5.75h-0zM16 20.25c-2.347 0-4.25-1.903-4.25-4.25s1.903-4.25 4.25-4.25c2.347 0 4.25 1.903 4.25 4.25v0c-0.003 2.346-1.904 4.247-4.25 4.25h-0z"
				></path>
			</symbol>
			<symbol id="icon-heart-light" viewBox="0 0 32 32">
				<path
					d="M16.001 27.75c-0 0-0 0-0 0-0.135 0-0.261-0.035-0.37-0.098l0.004 0.002c-2.413-1.426-4.502-2.965-6.421-4.691l0.036 0.032c-4.312-3.881-6.498-7.748-6.498-11.495 0.001-4.004 3.248-7.25 7.252-7.25 2.483 0 4.675 1.248 5.982 3.151l0.016 0.025c1.323-1.928 3.515-3.176 5.998-3.176 4.004 0 7.251 3.246 7.252 7.25v0c0 3.747-2.186 7.614-6.498 11.495-1.883 1.694-3.972 3.234-6.204 4.56l-0.182 0.1c-0.105 0.060-0.232 0.096-0.366 0.096-0 0-0 0-0 0v0zM10.001 5.75c-3.174 0.004-5.746 2.576-5.75 5.75v0c0 7.166 9.723 13.407 11.75 14.63 2.027-1.223 11.75-7.464 11.75-14.63-0.001-3.176-2.575-5.75-5.751-5.75-2.376 0-4.416 1.441-5.293 3.497l-0.014 0.038c-0.116 0.273-0.382 0.461-0.692 0.461s-0.576-0.188-0.69-0.456l-0.002-0.005c-0.887-2.093-2.925-3.535-5.299-3.535-0.003 0-0.007 0-0.010 0h0.001z"
				></path>
			</symbol>
			<symbol id="icon-list" viewBox="0 0 32 32">
				<path
					d="M28 16c0 0.552-0.448 1-1 1h-22c-0.552 0-1-0.448-1-1s0.448-1 1-1v0h22c0.552 0 1 0.448 1 1v0zM5 9h22c0.552 0 1-0.448 1-1s-0.448-1-1-1v0h-22c-0.552 0-1 0.448-1 1s0.448 1 1 1v0zM27 23h-22c-0.552 0-1 0.448-1 1s0.448 1 1 1v0h22c0.552 0 1-0.448 1-1s-0.448-1-1-1v0z"
				></path>
			</symbol>
			<symbol id="icon-squares-four" viewBox="0 0 32 32">
				<path
					d="M14 5h-8c0 0 0 0 0 0-0.552 0-1 0.448-1 1 0 0 0 0 0 0v0 8c0 0 0 0 0 0 0 0.552 0.448 1 1 1 0 0 0 0 0 0h8c0 0 0 0 0 0 0.552 0 1-0.448 1-1 0 0 0 0 0 0v0-8c0 0 0 0 0 0 0-0.552-0.448-1-1-1 0 0 0 0 0 0v0zM13 13h-6v-6h6zM26 5h-8c0 0 0 0 0 0-0.552 0-1 0.448-1 1 0 0 0 0 0 0v0 8c0 0 0 0 0 0 0 0.552 0.448 1 1 1 0 0 0 0 0 0h8c0 0 0 0 0 0 0.552 0 1-0.448 1-1 0 0 0 0 0 0v0-8c0 0 0 0 0 0 0-0.552-0.448-1-1-1 0 0 0 0 0 0v0zM25 13h-6v-6h6zM14 17h-8c0 0 0 0 0 0-0.552 0-1 0.448-1 1 0 0 0 0 0 0v0 8c0 0 0 0 0 0 0 0.552 0.448 1 1 1 0 0 0 0 0 0h8c0 0 0 0 0 0 0.552 0 1-0.448 1-1 0 0 0-0 0-0v0-8c0 0 0 0 0 0 0-0.552-0.448-1-1-1 0 0 0 0 0 0v0zM13 25h-6v-6h6zM26 17h-8c0 0 0 0 0 0-0.552 0-1 0.448-1 1 0 0 0 0 0 0v0 8c0 0 0 0 0 0 0 0.552 0.448 1 1 1 0 0 0 0 0 0h8c0 0 0 0 0 0 0.552 0 1-0.448 1-1 0 0 0-0 0-0v0-8c0 0 0 0 0 0 0-0.552-0.448-1-1-1 0 0 0 0 0 0v0zM25 25h-6v-6h6z"
				></path>
			</symbol>
			<symbol id="icon-faders-horizontal" viewBox="0 0 32 32">
				<path
					d="M18 21.499c0 0.552-0.448 1-1 1h-12c-0.552 0-1-0.448-1-1s0.448-1 1-1v0h12c0.552 0 1 0.448 1 1v0zM27 20.499h-5v-2c0-0.552-0.448-1-1-1s-1 0.448-1 1v0 6c0 0.552 0.448 1 1 1s1-0.448 1-1v0-2h5c0.552 0 1-0.448 1-1s-0.448-1-1-1v0zM5 11.499l4 0c0.552 0 1-0.448 1-1s-0.448-1-1-1v0l-4-0c-0.552 0-1 0.448-1 1s0.448 1 1 1v0zM13 14.499c0.552 0 1-0.448 1-1v0-2l13-0c0.552 0 1-0.448 1-1s-0.448-1-1-1v0l-13 0v-2c0-0.552-0.448-1-1-1s-1 0.448-1 1v0 6c0 0.552 0.448 1 1 1v0z"
				></path>
			</symbol>
			<symbol id="icon-Pencil" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M11.586 27h-5.586c-0.265 0-0.52-0.105-0.707-0.293s-0.293-0.442-0.293-0.707v-5.586c0-0.131 0.026-0.261 0.076-0.383s0.124-0.232 0.217-0.324l15-15c0.188-0.188 0.442-0.293 0.707-0.293s0.52 0.105 0.707 0.293l5.586 5.586c0.188 0.188 0.293 0.442 0.293 0.707s-0.105 0.52-0.293 0.707l-15 15c-0.093 0.093-0.203 0.166-0.324 0.217s-0.251 0.076-0.383 0.076z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M17 8l7 7"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M11.937 26.936l-6.872-6.873"
				></path>
			</symbol>
			<symbol id="icon-ChatsCircle" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M4.259 17.593c-1.118-1.885-1.51-4.113-1.101-6.267s1.589-4.083 3.32-5.428c1.731-1.344 3.893-2.011 6.080-1.874s4.25 1.068 5.799 2.617c1.55 1.55 2.48 3.612 2.617 5.799s-0.53 4.35-1.874 6.080c-1.344 1.731-3.275 2.911-5.428 3.32s-4.382 0.017-6.267-1.101h0l-3.108 0.888c-0.129 0.037-0.265 0.038-0.394 0.005s-0.248-0.101-0.342-0.196c-0.095-0.094-0.162-0.213-0.196-0.342s-0.032-0.265 0.005-0.394l0.888-3.108z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M11.508 21.987c0.442 1.256 1.158 2.398 2.095 3.344s2.072 1.673 3.324 2.128c1.252 0.455 2.588 0.626 3.914 0.502s2.608-0.541 3.753-1.22v0l3.108 0.888c0.129 0.037 0.265 0.039 0.394 0.005s0.248-0.101 0.342-0.196 0.162-0.213 0.196-0.342c0.034-0.129 0.032-0.266-0.005-0.394l-0.888-3.108c0.789-1.331 1.222-2.843 1.257-4.389s-0.33-3.076-1.058-4.441c-0.728-1.365-1.797-2.519-3.101-3.351s-2.801-1.314-4.346-1.399"
				></path>
			</symbol>
			<symbol id="icon-Camera" viewBox="0 0 30 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6842"
					d="M24.632 24.965h-18.947c-0.503 0-0.984-0.2-1.34-0.555s-0.555-0.837-0.555-1.34v-13.263c0-0.503 0.2-0.984 0.555-1.34s0.837-0.555 1.34-0.555h3.789l1.895-2.842h7.579l1.895 2.842h3.79c0.503 0 0.984 0.2 1.34 0.555s0.555 0.837 0.555 1.34v13.263c0 0.503-0.2 0.984-0.555 1.34s-0.837 0.555-1.34 0.555z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.6842"
					d="M15.158 20.228c2.355 0 4.263-1.909 4.263-4.263s-1.909-4.263-4.263-4.263c-2.354 0-4.263 1.909-4.263 4.263s1.909 4.263 4.263 4.263z"
				></path>
			</symbol>
			<symbol id="icon-SlidersHorizontal" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M18.5 21.499h-13.5"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M27 21.499h-3.5"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M21 23.999c1.381 0 2.5-1.119 2.5-2.5s-1.119-2.5-2.5-2.5c-1.381 0-2.5 1.119-2.5 2.5s1.119 2.5 2.5 2.5z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M10.5 10.499l-5.5-0"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M27 10.499l-11.5 0"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M13 12.999c1.381 0 2.5-1.119 2.5-2.5s-1.119-2.5-2.5-2.5c-1.381 0-2.5 1.119-2.5 2.5s1.119 2.5 2.5 2.5z"
				></path>
			</symbol>
			<symbol id="icon-text-align-left-light" viewBox="0 0 32 32">
				<path
					d="M4.25 8.5c0-0.414 0.336-0.75 0.75-0.75h22c0.414 0 0.75 0.336 0.75 0.75s-0.336 0.75-0.75 0.75v0h-22c-0.414-0-0.75-0.336-0.75-0.75v0zM5 14.25h16c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-16c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0zM27 17.75h-21.999c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h21.999c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0zM21 22.75h-15.999c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h15.999c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"
				></path>
			</symbol>
			<symbol id="icon-like" viewBox="0 0 30 32">
				<path
					d="M27.183 18.342c0.272 1.283 0.097 2.508-0.525 3.675 0.194 1.4-0.136 2.703-0.992 3.908-0.039 1.089-0.292 2.042-0.758 2.858-0.428 0.817-1.147 1.458-2.158 1.925-0.972 0.506-2.197 0.758-3.675 0.758-0.117 0-0.331 0-0.642 0s-0.525 0-0.642 0c-1.75 0-3.306-0.194-4.667-0.583-1.322-0.389-2.45-0.778-3.383-1.167-0.894-0.389-1.672-0.583-2.333-0.583-0.117 0.389-0.35 0.72-0.7 0.992-0.311 0.272-0.681 0.408-1.108 0.408h-3.733c-0.506 0-0.953-0.194-1.342-0.583-0.35-0.35-0.525-0.778-0.525-1.283v-14c0-0.506 0.175-0.933 0.525-1.283 0.389-0.389 0.836-0.583 1.342-0.583h5.775c0.311-0.272 0.7-0.719 1.167-1.342s0.953-1.264 1.458-1.925c0.544-0.7 1.011-1.225 1.4-1.575 0.117-0.156 0.292-0.797 0.525-1.925s0.622-2.139 1.167-3.033c0.583-0.933 1.4-1.4 2.45-1.4 1.75 0 3.111 0.506 4.083 1.517 1.011 1.011 1.517 2.547 1.517 4.608 0 0.894-0.175 1.789-0.525 2.683h2.1c0.933 0 1.789 0.253 2.567 0.758 0.778 0.467 1.38 1.089 1.808 1.867 0.428 0.739 0.642 1.536 0.642 2.392 0 1.011-0.272 1.983-0.817 2.917zM23.625 21.492c0.583-0.583 0.875-1.264 0.875-2.042 0.039-0.817-0.156-1.419-0.583-1.808 0.272 0 0.544-0.233 0.817-0.7 0.311-0.467 0.467-0.972 0.467-1.517s-0.214-1.050-0.642-1.517c-0.428-0.467-0.953-0.7-1.575-0.7h-6.067c0-0.7 0.272-1.594 0.817-2.683 0.583-1.128 0.875-2.061 0.875-2.8 0-0.389-0.019-0.681-0.058-0.875 0-0.233-0.058-0.525-0.175-0.875-0.078-0.35-0.214-0.622-0.408-0.817-0.156-0.194-0.428-0.369-0.817-0.525-0.35-0.156-0.797-0.233-1.342-0.233-0.311 0.311-0.603 1.167-0.875 2.567-0.272 1.361-0.719 2.353-1.342 2.975-0.272 0.272-0.681 0.778-1.225 1.517-0.544 0.7-1.031 1.342-1.458 1.925-0.428 0.544-0.914 1.050-1.458 1.517-0.506 0.467-0.953 0.7-1.342 0.7h-0.642v10.85c0.972 0 2.508 0.369 4.608 1.108 2.139 0.739 3.947 1.108 5.425 1.108h2.158c2.489 0 3.539-1.283 3.15-3.85 0.467-0.272 0.797-0.739 0.992-1.4s0.136-1.303-0.175-1.925zM4.725 27.792c0.272-0.272 0.408-0.603 0.408-0.992s-0.136-0.719-0.408-0.992c-0.272-0.272-0.603-0.409-0.992-0.409s-0.719 0.136-0.992 0.409c-0.272 0.272-0.408 0.603-0.408 0.992s0.136 0.719 0.408 0.992c0.272 0.272 0.603 0.409 0.992 0.409s0.719-0.136 0.992-0.409z"
				></path>
			</symbol>
			<symbol id="icon-unlike" viewBox="0 0 30 32">
				<path
					d="M27.183 14.725c0.544 0.933 0.817 1.906 0.817 2.917 0 1.322-0.486 2.489-1.458 3.5s-2.158 1.517-3.558 1.517h-2.1c0.35 0.895 0.525 1.789 0.525 2.683 0 2.061-0.506 3.597-1.517 4.608-0.972 1.011-2.333 1.517-4.083 1.517-1.050 0-1.867-0.467-2.45-1.4-0.544-0.895-0.933-1.906-1.167-3.033s-0.408-1.77-0.525-1.925c-0.428-0.428-1.108-1.244-2.042-2.45-0.933-1.244-1.594-2.042-1.983-2.392h-0.408c-0.389 0.622-0.933 0.933-1.633 0.933h-3.733c-0.506 0-0.953-0.175-1.342-0.525-0.35-0.389-0.525-0.836-0.525-1.342v-14c0-0.506 0.175-0.933 0.525-1.283 0.389-0.389 0.836-0.583 1.342-0.583h3.733c0.467 0 0.875 0.156 1.225 0.467h0.642c0.583 0 1.322-0.194 2.217-0.583s2.022-0.778 3.383-1.167c1.4-0.389 2.975-0.583 4.725-0.583 0.117 0 0.331 0 0.642 0s0.525 0 0.642 0c2.178 0 3.811 0.506 4.9 1.517 1.089 0.972 1.653 2.314 1.692 4.025 0.856 1.206 1.186 2.508 0.992 3.908 0.622 1.167 0.797 2.392 0.525 3.675zM2.742 18.458c0.272 0.272 0.603 0.408 0.992 0.408s0.719-0.136 0.992-0.408c0.272-0.272 0.408-0.603 0.408-0.992s-0.136-0.719-0.408-0.992c-0.272-0.272-0.603-0.408-0.992-0.408s-0.719 0.136-0.992 0.408c-0.272 0.272-0.408 0.603-0.408 0.992s0.136 0.719 0.408 0.992zM22.983 19.858c0.389 0 0.758-0.097 1.108-0.292 0.35-0.233 0.622-0.525 0.817-0.875s0.292-0.7 0.292-1.050c0-0.544-0.156-1.050-0.467-1.517-0.272-0.467-0.545-0.7-0.817-0.7 0.428-0.389 0.622-0.972 0.583-1.75 0-0.817-0.292-1.517-0.875-2.1 0.311-0.622 0.369-1.264 0.175-1.925s-0.525-1.128-0.992-1.4c0.389-2.567-0.661-3.85-3.15-3.85h-2.158c-1.478 0-3.286 0.369-5.425 1.108-2.1 0.739-3.636 1.108-4.608 1.108v10.85h0.642c0.467 0 1.031 0.35 1.692 1.050 0.661 0.661 1.381 1.517 2.158 2.567s1.322 1.731 1.633 2.042c0.622 0.622 1.069 1.634 1.342 3.033 0.272 1.361 0.564 2.197 0.875 2.508 0.661 0 1.186-0.097 1.575-0.292 0.428-0.195 0.719-0.486 0.875-0.875s0.253-0.719 0.292-0.992c0.039-0.272 0.058-0.661 0.058-1.167 0-0.739-0.292-1.653-0.875-2.742-0.544-1.128-0.817-2.042-0.817-2.742h6.067z"
				></path>
			</symbol>
			<symbol id="icon-Timer" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="miter"
					stroke-linecap="butt"
					stroke-miterlimit="10"
					stroke-width="2.4"
					d="M16 28.6c6.075 0 11-4.925 11-11s-4.925-11-11-11c-6.075 0-11 4.925-11 11s4.925 11 11 11z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2.4"
					d="M16 17.6l4.95-4.95"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2.4"
					d="M13 2.6h6"
				></path>
			</symbol>
			<symbol id="icon-delivery-1" viewBox="0 0 32 32">
				<path
					d="M24.168 19.025c-2.224 0-4.034 1.809-4.034 4.034s1.809 4.034 4.034 4.034c2.225 0 4.034-1.809 4.034-4.034s-1.809-4.034-4.034-4.034zM24.168 25.075c-1.112 0-2.017-0.904-2.017-2.017s0.904-2.017 2.017-2.017 2.017 0.905 2.017 2.017c0 1.112-0.904 2.017-2.017 2.017z"
				></path>
				<path
					d="M10.387 19.025c-2.224 0-4.034 1.809-4.034 4.034s1.809 4.034 4.034 4.034 4.034-1.809 4.034-4.034c0-2.224-1.809-4.034-4.034-4.034zM10.387 25.075c-1.112 0-2.017-0.904-2.017-2.017s0.905-2.017 2.017-2.017c1.112 0 2.017 0.905 2.017 2.017s-0.905 2.017-2.017 2.017z"
				></path>
				<path
					d="M26.884 7.48c-0.171-0.34-0.52-0.555-0.901-0.555h-5.311v2.017h4.689l2.746 5.461 1.802-0.906-3.025-6.017z"
				></path>
				<path d="M21.143 22.084h-7.63v2.017h7.63v-2.017z"></path>
				<path
					d="M7.36 22.084h-3.496c-0.557 0-1.008 0.451-1.008 1.008s0.451 1.008 1.008 1.008h3.496c0.557 0 1.008-0.452 1.008-1.008s-0.451-1.008-1.008-1.008z"
				></path>
				<path
					d="M31.787 15.919l-1.984-2.555c-0.191-0.246-0.485-0.39-0.796-0.39h-7.328v-7.059c0-0.557-0.451-1.008-1.008-1.008h-16.807c-0.557 0-1.008 0.451-1.008 1.008s0.451 1.008 1.008 1.008h15.798v7.059c0 0.557 0.452 1.008 1.008 1.008h7.842l1.468 1.892v5.201h-2.79c-0.557 0-1.008 0.451-1.008 1.008s0.451 1.008 1.008 1.008h3.798c0.557 0 1.008-0.451 1.008-1.008v-6.555c0-0.224-0.075-0.442-0.212-0.618z"
				></path>
				<path
					d="M7.294 16.975h-4.639c-0.557 0-1.008 0.451-1.008 1.008s0.451 1.008 1.008 1.008h4.639c0.557 0 1.008-0.451 1.008-1.008s-0.451-1.008-1.008-1.008z"
				></path>
				<path
					d="M9.613 13.008h-8.605c-0.557 0-1.008 0.451-1.008 1.008s0.451 1.008 1.008 1.008h8.605c0.557 0 1.008-0.451 1.008-1.008s-0.451-1.008-1.008-1.008z"
				></path>
				<path
					d="M11.26 9.042h-8.605c-0.557 0-1.008 0.451-1.008 1.008s0.451 1.008 1.008 1.008h8.605c0.557 0 1.008-0.451 1.008-1.008s-0.451-1.008-1.008-1.008z"
				></path>
			</symbol>
			<symbol id="icon-Package" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.92"
					d="M16.117 16l-0.133 12.851"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.92"
					d="M27.484 21.917v-11.833c0-0.177-0.047-0.351-0.136-0.504s-0.218-0.279-0.372-0.367l-10.5-5.935c-0.15-0.085-0.32-0.129-0.492-0.129s-0.342 0.045-0.492 0.129l-10.5 5.935c-0.154 0.087-0.282 0.214-0.372 0.367s-0.136 0.327-0.136 0.504v11.833c0 0.177 0.047 0.351 0.136 0.504s0.218 0.28 0.372 0.367l10.5 5.935c0.15 0.085 0.32 0.129 0.492 0.129s0.342-0.045 0.492-0.129l10.5-5.935c0.154-0.087 0.282-0.214 0.372-0.367s0.136-0.327 0.136-0.504v0z"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.92"
					d="M27.35 9.578l-11.23 6.422-11.495-6.423"
				></path>
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="1.92"
					d="M22.129 18.564v-6l-11.597-6.48"
				></path>
			</symbol>
			<symbol id="icon-plus" viewBox="0 0 32 32">
				<path
					d="M28 16c0 0 0 0 0 0 0 0.552-0.448 1-1 1 0 0-0 0-0 0h-10v10c0 0.552-0.448 1-1 1s-1-0.448-1-1v0-10h-10c-0.552 0-1-0.448-1-1s0.448-1 1-1v0h10v-10c0-0.552 0.448-1 1-1s1 0.448 1 1v0 10h10c0 0 0 0 0 0 0.552 0 1 0.448 1 1 0 0 0 0 0 0v0z"
				></path>
			</symbol>
			<symbol id="icon-check-bold" viewBox="0 0 32 32">
				<path
					d="M13 24.5c-0.001 0-0.001 0-0.002 0-0.414 0-0.788-0.168-1.059-0.439l-7-6.999c-0.271-0.271-0.439-0.646-0.439-1.061 0-0.828 0.672-1.5 1.5-1.5 0.414 0 0.789 0.168 1.061 0.439l5.939 5.939 12.939-12.939c0.271-0.271 0.646-0.439 1.061-0.439 0.828 0 1.5 0.672 1.5 1.5 0 0.414-0.168 0.789-0.439 1.061l-14 13.999c-0.271 0.271-0.645 0.439-1.059 0.439-0.001 0-0.001 0-0.002 0h0z"
				></path>
			</symbol>
			<symbol id="icon-ShareNetwork" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2.4"
					d="M8 20c2.209 0 4-1.791 4-4s-1.791-4-4-4c-2.209 0-4 1.791-4 4s1.791 4 4 4z"
				></path>
				<path
					fill="none"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2.4"
					d="M22 29c2.209 0 4-1.791 4-4s-1.791-4-4-4c-2.209 0-4 1.791-4 4s1.791 4 4 4z"
				></path>
				<path
					fill="none"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2.4"
					d="M22 11c2.209 0 4-1.791 4-4s-1.791-4-4-4c-2.209 0-4 1.791-4 4s1.791 4 4 4z"
				></path>
				<path
					fill="none"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2.4"
					d="M18.634 9.163l-7.271 4.674"
				></path>
				<path
					fill="none"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2.4"
					d="M11.363 18.163l7.271 4.674"
				></path>
			</symbol>
			<symbol id="icon-card" viewBox="0 0 39 32">
				<path
					fill="currentColor"
					stroke="currentColor"
					d="M38.685 3.756c-0.51-0.603-1.225-0.972-2.012-1.037l-27.735-2.316c-0.788-0.066-1.553 0.179-2.157 0.689-0.601 0.508-0.969 1.219-1.037 2.003l-0.558 5.235h-2.228c-1.631 0-2.958 1.327-2.958 2.958v17.362c0 1.631 1.327 2.958 2.958 2.958h27.832c1.631 0 2.958-1.327 2.958-2.958v-2.816l0.988 0.082c0.083 0.007 0.166 0.010 0.248 0.010 1.521 0 2.817-1.17 2.946-2.712l1.445-17.301c0.066-0.787-0.179-1.553-0.689-2.157v0zM2.958 9.868h27.832c0.783 0 1.42 0.637 1.42 1.42v1.582h-30.671v-1.582c0-0.783 0.637-1.42 1.42-1.42v0zM1.538 14.409h30.671v3.191h-30.671v-3.191zM30.79 30.069h-27.832c-0.783 0-1.42-0.637-1.42-1.42v-9.511h30.671v9.511c0 0.783-0.637 1.42-1.42 1.42zM37.841 5.785l-1.445 17.301c-0.065 0.78-0.753 1.362-1.533 1.297l-1.116-0.093v-13.001c0-1.631-1.327-2.958-2.958-2.958h-24.056l0.541-5.080c0.001-0.006 0.001-0.012 0.002-0.018 0.065-0.78 0.753-1.362 1.533-1.297l27.735 2.316c0.378 0.032 0.721 0.208 0.966 0.498s0.362 0.657 0.331 1.035v0z"
				></path>
				<path
					fill="currentColor"
					stroke="currentColor"
					d="M28.99 21.425h-7.403c-0.425 0-0.769 0.344-0.769 0.769v4.83c0 0.425 0.344 0.769 0.769 0.769h7.403c0.425 0 0.769-0.344 0.769-0.769v-4.83c0-0.425-0.344-0.769-0.769-0.769zM28.221 26.255h-5.865v-3.291h5.865v3.291z"
				></path>
			</symbol>
			<symbol id="icon-paylay" viewBox="0 0 32 32">
				<path
					d="M28.982 7.663c-0.102-1.629-0.636-3.023-1.596-4.162-1.829-2.17-5.116-3.314-9.507-3.314-1.708-0-10.539-0.186-10.628-0.186-0.006 0-0.011 0-0.017 0-0.355 0-0.665 0.239-0.743 0.587l-5.922 26.421c-0.051 0.226 0.004 0.455 0.149 0.636s0.363 0.278 0.594 0.278h3.927l-0.716 3.139c-0.052 0.226 0.002 0.467 0.147 0.648s0.363 0.291 0.595 0.291h9.904c0.364 0 0.679-0.259 0.747-0.618l1.242-6.457 4.638-0.038c0.023-0 0.046-0.001 0.069-0.004 0.078-0.008 7.864-0.884 9.416-9.937 0.668-3.902-0.81-6.095-2.299-7.282zM7.841 1.523c2.068 0.045 8.561 0.19 10.038 0.19 3.871 0 6.834 1 8.343 2.791 1.125 1.335 1.496 3.201 1.103 5.493-1.401 8.175-7.955 9.166-8.546 9.234l-5.531 0.064c-0.002 0-0.004 0-0.005 0-0.364 0-0.677 0.152-0.747 0.51l-1.318 6.601h-8.914l5.577-24.882zM29.78 14.687c-1.319 7.695-7.49 8.61-8.036 8.676l-5.223 0.042c-0.362 0.003-0.672 0.266-0.741 0.622l-1.24 6.457h-8.319l0.581-2.562h5.002c0.364 0 0.677-0.25 0.747-0.607l1.318-6.699 4.943 0.036c0.025 0 0.051 0 0.077-0.002 0.083-0.008 8.3-0.886 9.938-10.446 0.027-0.158 0.051-0.315 0.072-0.47 0.938 1.236 1.235 2.895 0.883 4.953z"
				></path>
			</symbol>
			<symbol id="icon-Play" viewBox="0 0 32 32">
				<path
					fill="none"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M28.519 15.147l-17.997-10.999c-0.152-0.093-0.325-0.143-0.503-0.147s-0.353 0.041-0.508 0.128c-0.155 0.087-0.284 0.213-0.374 0.367s-0.137 0.328-0.137 0.505v21.997c0 0.178 0.047 0.352 0.137 0.505s0.219 0.28 0.374 0.367c0.155 0.087 0.33 0.131 0.508 0.128s0.351-0.054 0.503-0.147l17.997-10.999c0.146-0.089 0.267-0.215 0.351-0.364s0.128-0.318 0.128-0.489-0.044-0.34-0.128-0.489c-0.084-0.149-0.205-0.275-0.351-0.364z"
				></path>
			</symbol>
			<symbol id="icon-play-fill" viewBox="0 0 32 32">
				<path
					fill="True"
					stroke="currentColor"
					stroke-linejoin="round"
					stroke-linecap="round"
					stroke-miterlimit="4"
					stroke-width="2"
					d="M28.519 15.147l-17.997-10.999c-0.152-0.093-0.325-0.143-0.503-0.147s-0.353 0.041-0.508 0.128c-0.155 0.087-0.284 0.213-0.374 0.367s-0.137 0.328-0.137 0.505v21.997c0 0.178 0.047 0.352 0.137 0.505s0.219 0.28 0.374 0.367c0.155 0.087 0.33 0.131 0.508 0.128s0.351-0.054 0.503-0.147l17.997-10.999c0.146-0.089 0.267-0.215 0.351-0.364s0.128-0.318 0.128-0.489-0.044-0.34-0.128-0.489c-0.084-0.149-0.205-0.275-0.351-0.364z"
				></path>
			</symbol>
			<symbol id="icon-chevron-left" viewBox="0 0 256 512">
				<path
					d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"
				/>
			</symbol>
			<symbol id="icon-chevron-right" viewBox="0 0 256 512">
				<path
					d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"
				/>
			</symbol>

			<symbol id="icon-angle-double-left" viewBox="0 0 384 512">
				<path
					d="M20.2 247.5L167 99.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17L85.3 256l118.5 119.7c4.7 4.7 4.7 12.3 0 17L184 412.5c-4.7 4.7-12.3 4.7-17 0l-146.8-148c-4.7-4.7-4.7-12.3 0-17zm160 17l146.8 148c4.7 4.7 12.3 4.7 17 0l19.8-19.8c4.7-4.7 4.7-12.3 0-17L245.3 256l118.5-119.7c4.7-4.7 4.7-12.3 0-17L344 99.5c-4.7-4.7-12.3-4.7-17 0l-146.8 148c-4.7 4.7-4.7 12.3 0 17z"
				/>
			</symbol>

			<symbol id="icon-angle-double-right" viewBox="0 0 384 512">
				<path
					d="M363.8 264.5L217 412.5c-4.7 4.7-12.3 4.7-17 0l-19.8-19.8c-4.7-4.7-4.7-12.3 0-17L298.7 256 180.2 136.3c-4.7-4.7-4.7-12.3 0-17L200 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17zm-160-17L57 99.5c-4.7-4.7-12.3-4.7-17 0l-19.8 19.8c-4.7 4.7-4.7 12.3 0 17L138.7 256 20.2 375.7c-4.7 4.7-4.7 12.3 0 17L40 412.5c4.7 4.7 12.3 4.7 17 0l146.8-148c4.7-4.7 4.7-12.3 0-17z"
				/>
			</symbol>
			<symbol id="facebook" viewBox="0 0 320 512">
				<path
					d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
				/>
			</symbol>
			<symbol id="twitter" viewBox="0 0 512 512">
				<path
					d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
				/>
			</symbol>
			<symbol id="instagram" viewBox="0 0 448 512">
				<path
					d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
				/>
			</symbol>
			<symbol id="youtube" viewBox="0 0 576 512">
				<path
					d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
				/>
			</symbol>
			<symbol id="book" viewBox="0 0 448 512">
				<path
					d="M448 368v-320C448 21.49 426.5 0 400 0h-320C35.82 0 0 35.82 0 80V448c0 35.35 28.65 64 64 64h368c8.844 0 16-7.156 16-16S440.8 480 432 480H416v-66.95C434.6 406.4 448 388.8 448 368zM32 80C32 53.49 53.49 32 80 32H96v352H64c-11.71 0-22.55 3.389-32 8.9V80zM384 480H64c-17.64 0-32-14.36-32-32s14.36-32 32-32h320V480zM400 384H128V32h272C408.8 32 416 39.17 416 48v320C416 376.8 408.8 384 400 384zM352 128H192C183.2 128 176 135.2 176 144S183.2 160 192 160h160c8.844 0 16-7.156 16-16S360.8 128 352 128zM352 224H192C183.2 224 176 231.2 176 240S183.2 256 192 256h160c8.844 0 16-7.156 16-16S360.8 224 352 224z"
				/>
			</symbol>
			<symbol id="layer-group" viewBox="0 0 512 512">
				<path
					d="M234.2 4.672C241 1.592 248.5 0 256 0C263.5 0 270.1 1.592 277.8 4.672L495.2 102.1C505.4 106.7 512 116.8 512 128C512 139.2 505.4 149.3 495.2 153.9L277.8 251.3C270.1 254.4 263.5 256 256 256C248.5 256 241 254.4 234.2 251.3L16.76 153.9C6.561 149.3 .0003 139.2 .0003 128C.0003 116.8 6.561 106.7 16.76 102.1L234.2 4.672zM256 32C252.1 32 249.1 32.64 247.2 33.87L37.27 128L247.2 222.1C249.1 223.4 252.1 224 256 224C259 224 262 223.4 264.8 222.1L474.7 128L264.8 33.87C262 32.64 259 32 256 32V32zM78.6 219.9C82.22 228 78.61 237.5 70.55 241.1L37.27 256L247.2 350.1C249.1 351.4 252.1 352 256 352C259 352 262 351.4 264.8 350.1L474.7 256L441.5 241.1C433.4 237.5 429.8 228 433.4 219.9C437 211.9 446.5 208.3 454.5 211.9L495.2 230.1C505.4 234.7 512 244.8 512 256C512 267.2 505.4 277.3 495.2 281.9L277.8 379.3C270.1 382.4 263.5 384 256 384C248.5 384 241 382.4 234.2 379.3L16.76 281.9C6.561 277.3 0 267.2 0 256C0 244.8 6.561 234.7 16.76 230.1L57.46 211.9C65.52 208.3 74.99 211.9 78.6 219.9H78.6zM37.27 384L247.2 478.1C249.1 479.4 252.1 480 256 480C259 480 262 479.4 264.8 478.1L474.7 384L441.5 369.1C433.4 365.5 429.8 356 433.4 347.9C437 339.9 446.5 336.3 454.5 339.9L495.2 358.1C505.4 362.7 512 372.8 512 384C512 395.2 505.4 405.3 495.2 409.9L277.8 507.3C270.1 510.4 263.5 512 256 512C248.5 512 241 510.4 234.2 507.3L16.76 409.9C6.561 405.3 0 395.2 0 384C0 372.8 6.561 362.7 16.76 358.1L57.46 339.9C65.52 336.3 74.99 339.9 78.6 347.9C82.21 356 78.61 365.5 70.54 369.1L37.27 384z"
				/>
			</symbol>
			<symbol id="pen-to-square" viewBox="0 0 512 512">
				<path
					d="M386.7 22.63C411.7-2.365 452.3-2.365 477.3 22.63L489.4 34.74C514.4 59.74 514.4 100.3 489.4 125.3L269 345.6C260.6 354.1 249.9 359.1 238.2 362.7L147.6 383.6C142.2 384.8 136.6 383.2 132.7 379.3C128.8 375.4 127.2 369.8 128.4 364.4L149.3 273.8C152 262.1 157.9 251.4 166.4 242.1L386.7 22.63zM454.6 45.26C442.1 32.76 421.9 32.76 409.4 45.26L382.6 72L440 129.4L466.7 102.6C479.2 90.13 479.2 69.87 466.7 57.37L454.6 45.26zM180.5 281L165.3 346.7L230.1 331.5C236.8 330.2 242.2 327.2 246.4 322.1L417.4 152L360 94.63L189 265.6C184.8 269.8 181.8 275.2 180.5 281V281zM208 64C216.8 64 224 71.16 224 80C224 88.84 216.8 96 208 96H80C53.49 96 32 117.5 32 144V432C32 458.5 53.49 480 80 480H368C394.5 480 416 458.5 416 432V304C416 295.2 423.2 288 432 288C440.8 288 448 295.2 448 304V432C448 476.2 412.2 512 368 512H80C35.82 512 0 476.2 0 432V144C0 99.82 35.82 64 80 64H208z"
				/>
			</symbol>
			<symbol id="headset" viewBox="0 0 512 512">
				<path
					d="M191.1 224c0-17.62-14.37-32.04-32-32.04l-32.01 0c-35.38 0-64 28.62-64 63.1L63.96 319.6c0 35.38 28.63 64 64.01 64h32c17.63 0 32-14.38 32-32L191.1 224zM159.1 351.6h-32c-17.63 0-32-14.38-32-32V256c0-17.62 14.38-32 32-32l32.02-.0001L159.1 351.6zM383.1 383.6c35.38 0 64.01-28.62 64.01-64l.0026-63.63c0-35.38-28.62-63.1-64-63.1l-31.1 0c-17.63 0-32 14.42-32 32.04l-.0105 127.6c0 17.62 14.38 32 32 32H383.1zM351.1 224l31.1 .0001c17.63 0 32 14.38 32 32V319.6c0 17.62-14.38 32-32 32h-32L351.1 224zM280.2 1.131c-153.5-14.29-276.2 108.1-280.2 254.9l-.0206 15.92C-.0459 280.8 7.155 288 16 288c8.755 0 15.96-7.162 16-15.92l.0838-16.08C35.52 128.6 142.5 20.63 276.9 32.96c116.3 10.68 203.1 112.3 203.1 229.1v169.1c0 26.51-21.49 48-48 48h-83.01c4.081-10.88 4.609-23.54-2.282-36.69c-9.093-17.35-28.04-27.31-47.62-27.31L241.8 416c-23.21 0-44.49 15.69-48.87 38.49C187 485.2 210.4 512 239.1 512l191.1 .0001c44.19 0 80.01-35.82 80.01-79.1V262.9C512 129.6 412.9 13.49 280.2 1.131zM303.1 480H239.1c-8.876 0-16-7.125-16-16s7.126-16 16-16h64.01c8.876 0 16 7.125 16 16S312.9 480 303.1 480z"
				/>
			</symbol>
			<symbol id="mobile" viewBox="0 0 320 512">
				<path
					d="M192 416c0 17.7-14.3 32-32 32s-32-14.3-32-32 14.3-32 32-32 32 14.3 32 32zM320 48v416c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h224c26.5 0 48 21.5 48 48zm-32 0c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v416c0 8.8 7.2 16 16 16h224c8.8 0 16-7.2 16-16V48z"
				/>
			</symbol>
			<symbol id="envelope" viewBox="0 0 512 512">
				<path
					d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"
				/>
			</symbol>
			<symbol id="search" viewBox="0 0 512 512">
				<path
					d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z"
				/>
			</symbol>
			<symbol id="location-dot" viewBox="0 0 384 512">
				<path
					d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"
				/>
			</symbol>
			<symbol id="star" viewBox="0 0 576 512">
				<path
					d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
				/>
			</symbol>
			<symbol id="star-o" viewBox="0 0 576 512">
				<path
					d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"
				/>
			</symbol>
			<symbol
				id="credit-card"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 576 512"
			>
				<path
					d="M96 368C96 359.2 103.2 352 112 352H176C184.8 352 192 359.2 192 368C192 376.8 184.8 384 176 384H112C103.2 384 96 376.8 96 368zM224 368C224 359.2 231.2 352 240 352H368C376.8 352 384 359.2 384 368C384 376.8 376.8 384 368 384H240C231.2 384 224 376.8 224 368zM0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM32 96V128H544V96C544 78.33 529.7 64 512 64H64C46.33 64 32 78.33 32 96zM32 224H544V160H32V224zM32 256V416C32 433.7 46.33 448 64 448H512C529.7 448 544 433.7 544 416V256H32z"
				/>
			</symbol>
			<svg
				id="circle-dollar"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 512 512"
			>
				<path
					d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zm20.8-378.4v14.2c9.7 1.2 19.4 3.9 29 6.6c1.9 .5 3.7 1 5.6 1.6c11.5 3.2 18.3 15.1 15.1 26.6s-15.1 18.2-26.6 15.1c-1.5-.4-3.1-.9-4.7-1.3c-7-2-14-3.9-21.1-5.3c-13.2-2.5-28.5-1.3-40.8 4c-11 4.8-20.1 16.4-7.6 24.4c9.8 6.3 21.8 9.5 33.2 12.6c2.4 .6 4.7 1.3 7 1.9c15.6 4.4 35.5 10.1 50.4 20.3c19.4 13.3 28.5 34.9 24.2 58.1c-4.1 22.4-19.7 37.1-38.4 44.7c-7.8 3.2-16.3 5.2-25.2 6.2l0 15.2c0 11.9-9.7 21.6-21.6 21.6s-21.6-9.7-21.6-21.6l0-17.4c-14.5-3.3-28.7-7.9-42.8-12.5c-11.3-3.7-17.5-16-13.7-27.3s16-17.5 27.3-13.7c2.5 .8 5 1.7 7.5 2.5c11.3 3.8 22.9 7.7 34.5 9.6c17 2.5 30.6 1 39.5-2.6c12-4.8 17.7-19.1 5.9-27.1c-10.1-6.9-22.6-10.3-34.5-13.5c-2.3-.6-4.5-1.2-6.8-1.9c-15.1-4.3-34-9.6-48.2-18.7c-19.5-12.5-29.4-33.3-25.2-56.4c4-21.8 21-36.3 39-44.1c5.5-2.4 11.4-4.3 17.5-5.7V133.6c0-11.9 9.7-21.6 21.6-21.6s21.6 9.7 21.6 21.6z"
				/>
			</svg>
			<svg
				id="file-plus"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 384 512"
			>
				<path
					d="M208 255.1C208 247.2 200.8 240 192 240S176 247.2 176 255.1v64h-64c-8.84 0-16 7.16-16 15.1c0 8.834 7.156 15.1 16 15.1h64v64C176 424.8 183.2 432 192 432c8.836 0 16-7.16 16-15.1V351.1h64c8.84 0 16-7.16 16-15.1s-7.16-15.1-16-15.1h-64V255.1zM365.3 125.3l-106.5-106.5C246.7 6.742 230.5 0 213.5 0H64C28.66 0 0 28.65 0 64l.0065 384c0 35.35 28.66 64 64 64H320c35.35 0 64-28.65 64-64V170.5C384 153.5 377.3 137.3 365.3 125.3zM224 34.08c4.477 1.566 8.664 3.846 12.12 7.299l106.5 106.5C346.1 151.3 348.4 155.5 349.9 160H240C231.2 160 224 152.8 224 144V34.08zM352 448c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V64c0-17.64 14.36-32 32-32h128v112C192 170.5 213.5 192 240 192H352V448z"
				/>
			</svg>
			<svg
				id="circle-play"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 512 512"
			>
				<path
					d="M356.5 235.5C363.6 239.9 368 247.6 368 256C368 264.4 363.6 272.1 356.5 276.5L212.5 364.5C205.1 369 195.8 369.2 188.3 364.9C180.7 360.7 176 352.7 176 344V167.1C176 159.3 180.7 151.3 188.3 147.1C195.8 142.8 205.1 142.1 212.5 147.5L356.5 235.5zM208 182.3V329.7L328.7 255.1L208 182.3zM0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM256 480C379.7 480 480 379.7 480 256C480 132.3 379.7 32 256 32C132.3 32 32 132.3 32 256C32 379.7 132.3 480 256 480z"
				/>
			</svg>
			<svg
				id="arrow-right-long"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 512 512"
			>
				<path
					d="M363.3 100.7l144 144C510.4 247.8 512 251.9 512 255.1s-1.562 8.188-4.688 11.31l-144 144c-6.25 6.25-16.38 6.25-22.62 0s-6.25-16.38 0-22.62l116.7-116.7H16c-8.844 0-16-7.156-16-15.1c0-8.844 7.156-16 16-16h441.4l-116.7-116.7c-6.25-6.25-6.25-16.38 0-22.62S357.1 94.44 363.3 100.7z"
				/>
			</svg>
			<svg
				id="xmark"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 320 512"
			>
				<path
					d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"
				/>
			</svg>
			<symbol id="sun-fill" viewBox="0 0 16 16">
				<path
					d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
				></path>
			</symbol>
			<symbol id="moon-stars-fill" viewBox="0 0 16 16">
				<path
					d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
				></path>
				<path
					d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
				></path>
			</symbol>
			<symbol id="circle-half" viewBox="0 0 16 16">
				<path
					d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"
				></path>
			</symbol>
			<symbol id="check2" viewBox="0 0 16 16">
				<path
					d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
				></path>
			</symbol>
			<svg
				id="moon-stars"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 21 21"
				stroke="currentColor"
				stroke-width="2"
				stroke-linecap="round"
				stroke-linejoin="round"
				class="feather feather-moon icon"
			>
				<path
					d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"
				></path>
			</svg>
		</svg>
		<div
			id="searchModal"
			data-bs-scroll="false"
			class="offcanvas offcanvas-top"
			style="--bs-offcanvas-height: auto"
		>
			<div class="container-wide container-xxl">
				<nav
					class="navbar navbar-expand-xl px-0 py-6 py-xl-12 row align-items-start"
				>
					<div
						class="col-xl-3 d-flex justify-content-center justify-content-xl-start"
					>
						<a
							href="../"
							class="navbar-brand py-4 d-lg-inline-block"
						>
							<img
								src="{{ asset('assets/front/images/others/logo.png') }}"
								height="26"
								alt="Glowing - Bootstrap 5 HTML Templates"
							/>
						</a>
					</div>
					<div class="col-xl-6 d-flex justify-content-center">
						<form
							class="w-xl-100 w-sm-75 w-100 mt-6 mt-xl-0 px-6 px-xl-0"
						>
							<div class="input-group mx-auto">
								<input
									type="text"
									class="form-control form-control bg-transparent border-primary"
									placeholder="Search product"
								/>
								<div
									class="form-control-append position-absolute end-0 top-0 bottom-0 d-flex align-items-center"
								>
									<button
										class="input-group-text bg-transparent border-0 px-0 me-6"
										type="submit"
									>
										<i class="far fa-search fs-5"></i>
									</button>
								</div>
							</div>
							<div
								class="d-flex align-items-center justify-content-center mt-6"
							>
								<p class="text-muted mb-0 mr-3">
									Popular Searches
								</p>
								<nav class="nav">
									<a
										class="nav-link text-decoration-underline py-0 px-4"
										href="#"
										>T-Shirt</a
									>
									<a
										class="nav-link text-decoration-underline py-0 px-4"
										href="#"
										>Blue</a
									>
									<a
										class="nav-link text-decoration-underline py-0 px-4"
										href="#"
										>Jacket</a
									>
								</nav>
							</div>
						</form>
					</div>
					<div
						class="icons-actions col-xl-3 d-flex justify-content-end fs-28px text-body-emphasis"
					>
						<div class="px-5 d-none d-xl-inline-block">
							<a
								class="lh-1 color-inherit text-decoration-none"
								href="#"
								data-bs-toggle="modal"
								data-bs-target="#signInModal"
							>
								<svg class="icon icon-user-light">
									<use xlink:href="#icon-user-light"></use>
								</svg>
							</a>
						</div>
						<div class="px-5 d-none d-xl-inline-block">
							<a
								class="position-relative lh-1 color-inherit text-decoration-none"
								href="../shop/wishlist.html"
							>
								<svg class="icon icon-star-light">
									<use xlink:href="#icon-star-light"></use>
								</svg>
								<span
									class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
									style="--square-size: 18px"
									>3</span
								>
							</a>
						</div>
						<div class="px-5 d-none d-xl-inline-block">
							<a
								class="position-relative lh-1 color-inherit text-decoration-none"
								href="#"
								data-bs-toggle="offcanvas"
								data-bs-target="#shoppingCart"
								aria-controls="shoppingCart"
								aria-expanded="false"
							>
								<svg class="icon icon-star-light">
									<use
										xlink:href="#icon-shopping-bag-open-light"
									></use>
								</svg>
								<span
									class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
									style="--square-size: 18px"
									>3</span
								>
							</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div
			id="shoppingCart"
			data-bs-scroll="false"
			class="offcanvas offcanvas-end"
		>
			<div class="offcanvas-header fs-4">
				<h4 class="offcanvas-title fw-semibold">Shopping Bag</h4>
				<button
					type="button"
					class="btn-close btn-close-bg-none"
					data-bs-dismiss="offcanvas"
					aria-label="Close"
				>
					<i class="far fa-times"></i>
				</button>
			</div>
			<div class="offcanvas-body me-xl-auto pt-0 mb-2 mb-xl-0">
				<form class="table-responsive-md shopping-cart pb-8 pb-lg-10">
					<table class="table table-borderless">
						<thead>
							<tr class="fw-500">
								<td colspan="3" class="border-bottom pb-6">
									<i
										class="far fa-check fs-12px border me-4 px-2 py-1 text-body-emphasis border-dark rounded-circle"
									></i>
									Your cart is saved for the next
									<span class="text-body-emphasis"
										>4m34s</span
									>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr class="position-relative">
								<td class="align-middle text-center">
									<a href="#" class="d-block clear-product">
										<i class="far fa-times"></i>
									</a>
								</td>
								<td class="shop-product">
									<div class="d-flex align-items-center">
										<div class="me-6">
											<img
												src="{{ asset('assets/front/images/products/product-03-75x100.jpg') }}"
												width="60"
												height="80"
												alt="natural coconut cleansing oil"
											/>
										</div>
										<div class="">
											<p class="card-text mb-1">
												<span
													class="fs-13px fw-500 text-decoration-line-through pe-3"
													>$39.00</span
												>
												<span
													class="fs-15px fw-bold text-body-emphasis"
													>$29.00</span
												>
											</p>
											<p
												class="fw-500 text-body-emphasis"
											>
												Natural Coconut Cleansing Oil
											</p>
										</div>
									</div>
								</td>
								<td class="align-middle p-0">
									<div
										class="input-group position-relative shop-quantity"
									>
										<a
											href="#"
											class="shop-down position-absolute z-index-2"
											><i class="far fa-minus"></i
										></a>
										<input
											name="number[]"
											type="number"
											class="form-control form-control-sm px-6 py-4 fs-6 text-center border-0"
											value="1"
											required=""
										/>
										<a
											href="#"
											class="shop-up position-absolute z-index-2"
											><i class="far fa-plus"></i>
										</a>
									</div>
								</td>
							</tr>
							<tr class="position-relative">
								<td class="align-middle text-center">
									<a href="#" class="d-block clear-product">
										<i class="far fa-times"></i>
									</a>
								</td>
								<td class="shop-product">
									<div class="d-flex align-items-center">
										<div class="me-6">
											<img
												src="{{ asset('assets/front/images/products/product-06-75x100.jpg') }}"
												width="60"
												height="80"
												alt="natural coconut cleansing oil"
											/>
										</div>
										<div class="">
											<p class="card-text mb-1">
												<span
													class="fs-13px fw-500 text-decoration-line-through pe-3"
													>$39.00</span
												>
												<span
													class="fs-15px fw-bold text-body-emphasis"
													>$29.00</span
												>
											</p>
											<p
												class="fw-500 text-body-emphasis"
											>
												Super Pure
											</p>
										</div>
									</div>
								</td>
								<td class="align-middle p-0">
									<div
										class="input-group position-relative shop-quantity"
									>
										<a
											href="#"
											class="shop-down position-absolute z-index-2"
											><i class="far fa-minus"></i
										></a>
										<input
											name="number[]"
											type="number"
											class="form-control form-control-sm px-6 py-4 fs-6 text-center border-0"
											value="1"
											required=""
										/>
										<a
											href="#"
											class="shop-up position-absolute z-index-2"
											><i class="far fa-plus"></i>
										</a>
									</div>
								</td>
							</tr>
							<tr class="position-relative">
								<td class="align-middle text-center">
									<a href="#" class="d-block clear-product">
										<i class="far fa-times"></i>
									</a>
								</td>
								<td class="shop-product">
									<div class="d-flex align-items-center">
										<div class="me-6">
											<img
												src="{{ asset('assets/front/images/products/product-09-75x100.jpg') }}"
												width="60"
												height="80"
												alt="natural coconut cleansing oil"
											/>
										</div>
										<div class="">
											<p class="card-text mb-1">
												<span
													class="fs-13px fw-500 text-decoration-line-through pe-3"
													>$39.00</span
												>
												<span
													class="fs-15px fw-bold text-body-emphasis"
													>$29.00</span
												>
											</p>
											<p
												class="fw-500 text-body-emphasis"
											>
												Cleansing Balm
											</p>
										</div>
									</div>
								</td>
								<td class="align-middle p-0">
									<div
										class="input-group position-relative shop-quantity"
									>
										<a
											href="#"
											class="shop-down position-absolute z-index-2"
											><i class="far fa-minus"></i
										></a>
										<input
											name="number[]"
											type="number"
											class="form-control form-control-sm px-6 py-4 fs-6 text-center border-0"
											value="1"
											required=""
										/>
										<a
											href="#"
											class="shop-up position-absolute z-index-2"
											><i class="far fa-plus"></i>
										</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="offcanvas-footer flex-wrap">
				<div
					class="d-flex align-items-center justify-content-between w-100 mb-5"
				>
					<span class="text-body-emphasis">Total price:</span>
					<span class="cart-total fw-bold text-body-emphasis"
						>$106.00</span
					>
				</div>
				<a
					href="../shop/checkout.html"
					class="btn btn-dark w-100 mb-7"
					title="Check Out"
					>Check Out</a
				>
				<a
					href="../shop/shopping-cart.html"
					class="btn btn-outline-dark w-100"
					title="View shopping cart"
					>View shopping cart</a
				>
			</div>
		</div>

		<div
			class="modal"
			id="signInModal"
			tabindex="-1"
			aria-labelledby="signInModal"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
			>
				<div class="modal-content">
					<div class="modal-header text-center border-0 pb-0">
						<button
							type="button"
							class="btn-close position-absolute end-5 top-5"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
						<h3 class="modal-title w-100" id="signInModalLabel">
							Sign In
						</h3>
					</div>
					<div class="modal-body px-sm-13 px-8">
						<p class="text-center fs-16 mb-10">
							Don’t have an account yet?
							<a
								href="#"
								data-bs-toggle="modal"
								data-bs-target="#signUpModal"
								class="text-black"
								>Sign up</a
							>
							for free
						</p>
						<form action="#">
							<input
								name="email"
								type="email"
								class="form-control mb-5"
								placeholder="Your email"
								required
							/>
							<input
								name="password"
								type="password"
								class="form-control"
								placeholder="Password"
								required
							/>
							<div
								class="d-flex align-items-center justify-content-between mt-8 mb-7"
							>
								<div class="custom-control d-flex form-check">
									<input
										name="stay-signed-in"
										type="checkbox"
										class="form-check-input rounded-0 me-3"
										id="staySignedIn"
									/>
									<label
										class="custom-control-label text-body"
										for="staySignedIn"
										>Stay signed in</label
									>
								</div>
								<a href="#" class="text-secondary"
									>Forgot your password?</a
								>
							</div>
							<button
								type="submit"
								value="Login"
								class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary w-100"
							>
								Log In
							</button>
						</form>
					</div>
					<div class="modal-footer px-13 pt-0 pb-12 border-0">
						<div class="border-bottom w-100"></div>
						<div class="text-center lh-1 mb-8 w-100 mt-n5">
							<span class="fs-14 bg-body lh-1 px-4"
								>or Log-in with</span
							>
						</div>
						<div class="d-flex w-100">
							<a
								href="#"
								class="btn btn-outline-secondary w-100 border-2x me-5 btn-hover-bg-primary btn-hover-border-primary"
								><i
									class="fab fa-facebook-f me-4"
									style="color: #2e58b2"
								></i
								>Facebook</a
							>
							<a
								href="#"
								class="btn btn-outline-secondary w-100 border-2x mt-0 btn-hover-bg-primary btn-hover-border-primary"
								><i
									class="fab fa-google me-4"
									style="color: #dd4b39"
								></i
								>Google</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div
			class="modal"
			id="signUpModal"
			tabindex="-1"
			aria-labelledby="signUpModal"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
			>
				<div class="modal-content">
					<div class="modal-header text-center border-0 pb-0">
						<button
							type="button"
							class="btn-close position-absolute end-5 top-5"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
						<h3 class="modal-title w-100" id="signUpModalLabel">
							Sign Up
						</h3>
					</div>
					<div class="modal-body px-sm-13 px-8">
						<p class="text-center fs-16 mb-10">
							Already have an account?
							<a
								href="#"
								data-bs-toggle="modal"
								data-bs-target="#signInModal"
								class="text-black"
								>Log in</a
							>
						</p>
						<form action="#">
							<input
								name="first-name"
								type="text"
								class="form-control border-1 mb-5"
								placeholder="First name"
								required
							/>
							<input
								name="last-name"
								type="text"
								class="form-control border-1 mb-5"
								placeholder="Last name"
								required
							/>
							<input
								name="email"
								type="email"
								class="form-control border-1 mb-5"
								placeholder="Your email"
								required
							/>
							<input
								name="password"
								type="password"
								class="form-control border-1"
								placeholder="Password"
								required
							/>
							<div class="d-flex align-items-center mt-8 mb-7">
								<div class="form-check">
									<input
										name="agree-policy-terms"
										type="checkbox"
										class="form-check-input rounded-0 me-3"
										id="agreePolicyTerm"
									/>
									<label
										class="custom-control-label text-body"
										for="agreePolicyTerm"
										>Yes, I agree with Grace
										<a href="#" class="text-black"
											>Privacy Policy</a
										>
										and
										<a href="#" class="text-black"
											>Terms of Use</a
										></label
									>
								</div>
							</div>
							<button
								type="submit"
								value="Sign Up"
								class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary w-100"
							>
								Sign Up
							</button>
						</form>
					</div>
					<div class="modal-footer px-13 pt-0 pb-12 border-0">
						<div class="border-bottom w-100"></div>
						<div class="text-center lh-1 mb-8 w-100 mt-n5">
							<span class="fs-14 bg-body lh-1 px-4"
								>or Sign Up with</span
							>
						</div>
						<div class="d-flex w-100">
							<a
								href="#"
								class="btn btn-outline-secondary w-100 border-2x me-5 btn-hover-bg-primary btn-hover-border-primary"
								><i
									class="fab fa-facebook-f me-4"
									style="color: #2e58b2"
								></i
								>Facebook</a
							>
							<a
								href="#"
								class="btn btn-outline-secondary w-100 border-2x mt-0 btn-hover-bg-primary btn-hover-border-primary"
								><i
									class="fab fa-google me-4"
									style="color: #dd4b39"
								></i
								>Google</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div
			class="modal fade"
			id="quickViewModal"
			aria-labelledby="quickViewModal"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header border-0 py-5">
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div class="modal-body pt-0">
						<div class="row">
							<div class="col-md-6 pe-13">
								<div class="position-relative">
									<div
										class="position-absolute z-index-2 w-100 d-flex justify-content-end"
									>
										<div class="p-6">
											<a
												href="#"
												class="d-flex align-items-center justify-content-center product-gallery-action rounded-circle"
												data-bs-toggle="tooltip"
												data-bs-placement="left"
												data-bs-title="Add to wishlist"
											>
												<svg class="icon fs-4">
													<use
														xlink:href="#icon-star-light"
													></use>
												</svg>
											</a>
											<a
												href="../shop/compare.html"
												class="d-flex align-items-center justify-content-center mt-5 product-gallery-action rounded-circle"
												data-bs-toggle="tooltip"
												data-bs-placement="left"
												data-bs-title="Compare"
											>
												<svg class="icon fs-4">
													<use
														xlink:href="#icon-arrows-left-right-light"
													></use>
												</svg>
											</a>
										</div>
									</div>
									<div
										id="slider"
										class="slick-slider slick-slider-arrow-inside slick-slider-dots-inside slick-slider-dots-light g-0"
										data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slider-thumb&#34;,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}"
									>
										<a
											href="{{ asset('assets/front/images/shop/product-gallery-05.jpg') }}"
											data-gallery="gallery1"
											><img
												src="#"
												data-src="{{ asset('assets/front/images/shop/product-gallery-05.jpg') }}"
												class="h-auto lazy-image"
												width="540"
												height="720"
												alt=""
										/></a>
										<a
											href="{{ asset('assets/front/images/shop/product-gallery-06.jpg') }}"
											data-gallery="gallery1"
											><img
												src="#"
												data-src="{{ asset('assets/front/images/shop/product-gallery-06.jpg') }}"
												class="h-auto lazy-image"
												width="540"
												height="720"
												alt=""
										/></a>
										<a
											href="{{ asset('assets/front/images/shop/product-gallery-07.jpg') }}"
											data-gallery="gallery1"
											><img
												src="#"
												data-src="{{ asset('assets/front/images/shop/product-gallery-07.jpg') }}"
												class="h-auto lazy-image"
												width="540"
												height="720"
												alt=""
										/></a>
										<a
											href="{{ asset('assets/front/images/shop/product-gallery-08.jpg') }}"
											data-gallery="gallery1"
											><img
												src="#"
												data-src="{{ asset('assets/front/images/shop/product-gallery-08.jpg') }}"
												class="h-auto lazy-image"
												width="540"
												height="720"
												alt=""
										/></a>
									</div>
								</div>
								<div class="mt-6">
									<div
										id="slider-thumb"
										class="slick-slider slick-slider-thumb ps-1 ms-n3 me-n4"
										data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slider&#34;,&#34;dots&#34;:false,&#34;focusOnSelect&#34;:true,&#34;slidesToShow&#34;:5,&#34;vertical&#34;:false}"
									>
										<img
											src="#"
											data-src="{{ asset('assets/front/images/shop/product-gallery-05-154x205.jpg') }}"
											class="mx-3 px-0 h-auto cursor-pointer lazy-image"
											width="75"
											height="100"
											alt=""
										/>
										<img
											src="#"
											data-src="{{ asset('assets/front/images/shop/product-gallery-06-154x205.jpg') }}"
											class="mx-3 px-0 h-auto cursor-pointer lazy-image"
											width="75"
											height="100"
											alt=""
										/>
										<img
											src="#"
											data-src="{{ asset('assets/front/images/shop/product-gallery-07-154x205.jpg') }}"
											class="mx-3 px-0 h-auto cursor-pointer lazy-image"
											width="75"
											height="100"
											alt=""
										/>
										<img
											src="#"
											data-src="{{ asset('assets/front/images/shop/product-gallery-08-154x205.jpg') }}"
											class="mx-3 px-0 h-auto cursor-pointer lazy-image"
											width="75"
											height="100"
											alt=""
										/>
									</div>
								</div>
							</div>
							<div class="col-md-6 pt-md-0 pt-10">
								<p class="d-flex align-items-center mb-6">
									<span class="text-decoration-line-through"
										>39.00</span
									>
									<span
										class="fs-18px text-body-emphasis ps-6 fw-bold"
										>29.00</span
									>
									<span
										class="badge text-bg-primary fs-6 fw-semibold ms-7 px-6 py-3"
										>20%</span
									>
								</p>
								<h1 class="mb-4 pb-2 fs-4">
									<a
										href="../shop/product-details-v1.html"
										title="Natural Coconut Cleansing Oil"
									>
										Natural Coconut Cleansing Oil
									</a>
								</h1>
								<div
									class="d-flex align-items-center fs-15px mb-6"
								>
									<p
										class="mb-0 fw-semibold text-body-emphasis"
									>
										4.86
									</p>
									<div
										class="d-flex align-items-center fs-12px justify-content-center mb-0 px-6 rating-result"
									>
										<div class="rating">
											<div class="empty-stars">
												<span class="star">
													<svg class="icon star-o">
														<use
															xlink:href="#star-o"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg class="icon star-o">
														<use
															xlink:href="#star-o"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg class="icon star-o">
														<use
															xlink:href="#star-o"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg class="icon star-o">
														<use
															xlink:href="#star-o"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg class="icon star-o">
														<use
															xlink:href="#star-o"
														></use>
													</svg>
												</span>
											</div>
											<div
												class="filled-stars"
												style="width: 100%"
											>
												<span class="star">
													<svg
														class="icon star text-primary"
													>
														<use
															xlink:href="#star"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg
														class="icon star text-primary"
													>
														<use
															xlink:href="#star"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg
														class="icon star text-primary"
													>
														<use
															xlink:href="#star"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg
														class="icon star text-primary"
													>
														<use
															xlink:href="#star"
														></use>
													</svg>
												</span>
												<span class="star">
													<svg
														class="icon star text-primary"
													>
														<use
															xlink:href="#star"
														></use>
													</svg>
												</span>
											</div>
										</div>
									</div>
									<a
										href="#"
										class="border-start ps-6 text-body"
										>Read 2947 reviews</a
									>
								</div>
								<p class="fs-15px">
									Niacinamide and Vitamin C are two anti-aging
									superstars but not usually formulated
									together because of their different pH
									levels.
								</p>

								<p class="mb-4 pb-2">
									<span class="text-body-emphasis">
										<svg
											class="icon fs-5 me-4 pe-2 align-text-bottom"
										>
											<use
												xlink:href="#icon-eye-light"
											></use>
										</svg>
										17 people
									</span>
									are viewing this right now
								</p>
								<p class="mb-4 pb-2 text-body-emphasis">
									<svg
										class="icon fs-5 me-4 pe-2 align-text-bottom"
									>
										<use xlink:href="#icon-Timer"></use>
									</svg>
									Only 9 left in stock
								</p>
								<div class="progress mb-7" style="height: 4px">
									<div
										class="progress-bar w-25"
										role="progressbar"
										aria-valuenow="25"
										aria-valuemin="0"
										aria-valuemax="100"
									></div>
								</div>
								<form class="mb-9 pb-2">
									<div class="row align-items-end">
										<div class="form-group col-sm-4">
											<label
												class="text-body-emphasis fw-semibold fs-15px pb-6"
												for="QuickViewNumber"
												>Quantity:
											</label>
											<div
												class="input-group position-relative w-100 input-group-lg"
											>
												<a
													href="#"
													class="shop-down position-absolute translate-middle-y top-50 start-0 ps-7 product-info-2-minus"
													><i class="far fa-minus"></i
												></a>
												<input
													name="number"
													type="number"
													id="QuickViewNumber"
													class="product-info-2-quantity form-control w-100 px-6 text-center"
													value="1"
													required=""
												/>
												<a
													href="#"
													class="shop-up position-absolute translate-middle-y top-50 end-0 pe-7 product-info-2-plus"
													><i class="far fa-plus"></i>
												</a>
											</div>
										</div>
										<div
											class="col-sm-8 pt-9 mt-2 mt-sm-0 pt-sm-0"
										>
											<button
												type="submit"
												class="btn-hover-bg-primary btn-hover-border-primary btn btn-lg btn-dark w-100"
											>
												Add To Bag
											</button>
										</div>
									</div>
								</form>
								<p class="mb-4 pb-2">
									<span class="text-body-emphasis">
										<svg class="icon fs-28px me-2 pe-4">
											<use
												xlink:href="#icon-delivery-1"
											></use></svg
										>Get it between:
									</span>
									Feb 3 - Feb 14,2021
								</p>
								<p class="mb-4 pb-2">
									<span class="text-body-emphasis">
										<svg class="icon fs-28px me-2 pe-4">
											<use
												xlink:href="#icon-Package"
											></use></svg
										>Free Shipping & Returns:
									</span>
									On all orders over $200
								</p>
								<div
									class="card border-0 bg-body-tertiary rounded text-center mt-7"
								>
									<div class="pt-8 px-5">
										<img
											class="img-fluid"
											src="{{ asset('assets/front/images/shop/product-info-2.png') }}"
											alt="pay"
											width="357"
											height="28"
										/>
									</div>
									<div class="card-body pt-6 pb-7">
										<p class="fs-14px fw-normal mb-0">
											Guarantee safe &amp; secure checkout
										</p>
									</div>
								</div>
								<ul
									class="single-product-meta list-unstyled border-top pt-7 mt-7"
								>
									<li
										class="d-flex mb-4 pb-2 align-items-center"
									>
										<span
											class="text-body-emphasis fw-semibold fs-14px"
											>Sku:</span
										>
										<span class="ps-4">SF09281</span>
									</li>
									<li
										class="d-flex mb-4 pb-2 align-items-center"
									>
										<span
											class="text-body-emphasis fw-semibold fs-14px"
											>Categories:</span
										>
										<span class="ps-4"
											>Makeup, Skincare</span
										>
									</li>
								</ul>

								<ul
									class="list-inline d-flex justify-content-start mb-0 fs-6"
								>
									<li class="list-inline-item">
										<a
											class="text-body text-decoration-none product-info-share product-info-share"
											href="#"
											><i
												class="fab fa-facebook-f me-4"
											></i>
											Facebook</a
										>
									</li>
									<li class="list-inline-item ms-7">
										<a
											class="text-body text-decoration-none product-info-share product-info-share"
											href="#"
											><i
												class="fab fa-instagram me-4"
											></i>
											Instagram</a
										>
									</li>
									<li class="list-inline-item ms-7">
										<a
											class="text-body text-decoration-none product-info-share product-info-share"
											href="#"
											><i class="fab fa-youtube me-4"></i>
											Youtube</a
										>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar">
			<div
				id="offCanvasNavBar"
				class="offcanvas offcanvas-start"
				style="--bs-offcanvas-width: 310px"
			>
				<div class="offcanvas-header bg-body-tertiary">
					<h3 class="offcanvas-title text-uppercase">Glowing</h3>
					<button
						type="button"
						class="btn-close"
						data-bs-dismiss="offcanvas"
						aria-label="Close"
					></button>
				</div>
				<hr class="mt-0" />
				<div class="offcanvas-body pt-0 mb-2">
					<ul class="navbar-nav">
						<div
							class="icons-actions d-flex justify-content-end w-xl-50 fs-28px text-body-emphasis border-bottom"
						>
							<div class="px-5">
								<a
									class="lh-1 color-inherit text-decoration-none"
									href="#"
									data-bs-toggle="modal"
									data-bs-target="#signInModal"
								>
									<svg class="icon icon-user-light">
										<use
											xlink:href="#icon-user-light"
										></use>
									</svg>
								</a>
							</div>
							<div class="px-5">
								<a
									class="position-relative lh-1 color-inherit text-decoration-none"
									href="../shop/wishlist.html"
								>
									<svg class="icon icon-star-light">
										<use
											xlink:href="#icon-star-light"
										></use>
									</svg>
									<span
										class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
										style="--square-size: 18px"
										>3</span
									>
								</a>
							</div>
							<div class="px-5">
								<a
									class="position-relative lh-1 color-inherit text-decoration-none"
									href="#"
									data-bs-toggle="offcanvas"
									data-bs-target="#shoppingCart"
									aria-controls="shoppingCart"
									aria-expanded="false"
								>
									<svg class="icon icon-star-light">
										<use
											xlink:href="#icon-shopping-bag-open-light"
										></use>
									</svg>
									<span
										class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
										style="--square-size: 18px"
										>3</span
									>
								</a>
							</div>

							<div class="px-5">
								<a
									class="lh-1 color-inherit text-decoration-none"
									href="../shop/compare.html"
								>
									<svg
										class="icon icon-arrows-left-right-light"
									>
										<use
											xlink:href="#icon-arrows-left-right-light"
										></use>
									</svg>
								</a>
							</div>
						</div>
						<li
							class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth border-bottom"
						>
							<a
								class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
								href="../index.html"
								id="menu-item-home-canvas"
								aria-haspopup="true"
								aria-expanded="false"
								>Ana Səhifə</a
							>
						</li>
						<li
							class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth position-static border-bottom"
						>
							<a
								class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
								href="../shop/shop-layout-v2.html"
								id="menu-item-shop-canvas"
								aria-haspopup="true"
								aria-expanded="false"
								>Məhsullar</a
							>
						</li>
						<li
							class="nav-item transition-all-xl-1 py-0 dropdown border-bottom"
						>
							<a
								class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
								href="../blog/list.html"
								id="menu-item-pages-canvas"
								aria-haspopup="true"
								aria-expanded="false"
								>Blog</a
							>
						</li>
						<li
							class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth border-bottom"
						>
							<a
								class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
								href="../about-us-02.html"
								id="menu-item-blocks-canvas"
								aria-haspopup="true"
								aria-expanded="false"
								>Haqqımızda</a
							>
						</li>
						<li
							class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth border-bottom"
						>
							<a
								class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
								href="../contact-us-01.html"
								id="menu-item-docs-canvas"
								aria-haspopup="true"
								aria-expanded="false"
								>Əlaqə</a
							>
						</li>
					</ul>
				</div>
				<hr class="mb-0" />
				<div class="offcanvas-footer bg-body-tertiary">
					© 2023 Glowing. <br />
					All rights reserved.
				</div>
			</div>
		</div>
		<div class="position-fixed z-index-10 bottom-0 end-0 p-10">
			<a
				href="#"
				class="gtf-back-to-top text-decoration-none bg-body text-primary bg-primary-hover text-light-hover shadow square p-0 rounded-circle d-flex align-items-center justify-content-center"
				title="Back To Top"
				style="--square-size: 48px"
				><i class="fa-solid fa-arrow-up"></i
			></a>
		</div>
	</body>
</html>

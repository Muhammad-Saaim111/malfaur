<!-- FOOTER -->
<footer>
  <div class="footer-brand footer-col">
    <div class="footer-brand-name" >
      <img class="footer-logo-img" src="{{ asset('images/hexafume/hexafume-white.png') }}" alt="Hexafume" width="210" height="70" style="width:210px !important;height:70px !important;max-width:210px;max-height:70px;object-fit:contain;display:block;" 
      onerror="this.style.display='none';this.nextElementSibling.style.display='inline'"/>
      <span style="display:none;">HEXA<span class="dot">FUME</span></span>
    </div>
    <p>We're in the business of providing strategic digital solutions. Since our inception, we've delivered 300+ projects that enable brands to connect globally.</p>
  </div>
  <div class="footer-col">
    <h4>Services</h4>
    <ul>
      <li><a href="{{ route('services') }}">Web Development</a></li>
      <li><a href="{{ route('services') }}">Mobile Apps</a></li>
      <li><a href="{{ route('services') }}">AI Integration</a></li>
      <li><a href="{{ route('services') }}">Blockchain & Web3</a></li>
      <li><a href="{{ route('services') }}">DevOps Solutions</a></li>
    </ul>
  </div>
  <div class="footer-col">
    <h4>Company</h4>
    <ul>
      <li><a href="{{ route('about') }}">About Us</a></li>
      <li><a href="{{ route('process') }}">Our Process</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="{{ route('work') }}">Case Studies</a></li>
      <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
  </div>
  <div class="footer-col">
    <h4>Legal</h4>
    <ul>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="#">Cookie Policy</a></li>
    </ul>
  </div>
</footer>
<div class="footer-bottom">
  <span>© {{ date('Y') }} Hexafume. All rights reserved.</span>
  <div class="footer-bottom-socials">
    <a href="https://www.instagram.com/hexafume?igsh=MWplZXF2bGkzcG00eA==" class="social-btn" aria-label="Follow Hexafume on Instagram" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
    <a href="https://www.linkedin.com/company/hexafume" class="social-btn" aria-label="Connect with Hexafume on LinkedIn" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
  </div>
</div>

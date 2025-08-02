export default function HeroQuoteSection() {
  return (
    <section className="bg-gradient-to-r from-red-600 to-orange-500 py-16">
      <div className="container mx-auto px-6 text-center">
        <h2 className="text-3xl md:text-4xl font-bold text-white mb-6">India's Most Trusted Moving Company</h2>
        <p className="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
          Professional, reliable, and affordable moving services across India. Let us make your relocation stress-free
          with our expert team.
        </p>

        {/* Trust indicators */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-2xl mx-auto">
          <div className="text-center">
            <div className="text-2xl font-bold text-yellow-400">15+</div>
            <div className="text-white/80 text-sm">Years Experience</div>
          </div>
          <div className="text-center">
            <div className="text-2xl font-bold text-yellow-400">10K+</div>
            <div className="text-white/80 text-sm">Happy Customers</div>
          </div>
          <div className="text-center">
            <div className="text-2xl font-bold text-yellow-400">100+</div>
            <div className="text-white/80 text-sm">Cities Covered</div>
          </div>
          <div className="text-center">
            <div className="text-2xl font-bold text-yellow-400">24/7</div>
            <div className="text-white/80 text-sm">Support</div>
          </div>
        </div>
      </div>
    </section>
  )
}

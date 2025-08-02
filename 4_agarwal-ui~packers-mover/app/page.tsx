import AgarwalHeader from "../agarwal-header"
import HeroQuoteSection from "../hero-quote-section"
import AgarwalFooter from "../agarwal-footer"
import QuoteFormSection from "../quote-form-section"
import AboutSection from "../about-section"
import ServiceSection from "../services-section"
import FreeQuoteBanner from "../freequotebanner"
import LocationGrid from "../locationgrid"
import ReviewSection from "../review-section"

export default function Page() { 
  return (
    <div>
      <AgarwalHeader />
      <QuoteFormSection />
      <HeroQuoteSection />
      <AboutSection />
      <ServiceSection />
      <LocationGrid />
      <FreeQuoteBanner />
      <ReviewSection />
      <main className="container mx-auto py-16">
        <div className="text-center mb-12">
          <h1 className="text-4xl font-bold text-gray-800 mb-4">Professional Moving Services Across India</h1>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            With years of experience in the moving industry, Agarwal Movers provides reliable, efficient, and affordable
            packing and moving services for residential and commercial clients.
          </p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
          <div className="text-center p-6 bg-white rounded-lg shadow-lg">
            <div className="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <span className="text-white font-bold text-xl">📦</span>
            </div>
            <h3 className="text-xl font-semibold mb-2">Professional Packing</h3>
            <p className="text-gray-600">Expert packing services to ensure your belongings are safe during transit.</p>
          </div>
          <div className="text-center p-6 bg-white rounded-lg shadow-lg">
            <div className="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <span className="text-white font-bold text-xl">🚛</span>
            </div>
            <h3 className="text-xl font-semibold mb-2">Safe Transportation</h3>
            <p className="text-gray-600">Modern fleet of vehicles for secure and timely delivery of your goods.</p>
          </div>
          <div className="text-center p-6 bg-white rounded-lg shadow-lg">
            <div className="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <span className="text-white font-bold text-xl">🏠</span>
            </div>
            <h3 className="text-xl font-semibold mb-2">Complete Relocation</h3>
            <p className="text-gray-600">End-to-end moving solutions for homes and offices across India.</p>
          </div>
        </div>
      </main>
      <AgarwalFooter />
    </div>
  )
}

import AgarwalHeader from "../../agarwal-header"
import AgarwalFooter from "../../agarwal-footer"

import QuoteFormSection from "../../quote-form-section"
import HeroQuoteSection from "../../hero-quote-section"

import ServiceSection from "../../services-section"
import LocationGrid from "../../locationgrid"
import FreeQuoteBanner from "../../freequotebanner"
import ReviewSection from "../../review-section"

export default function Contact() {
  return (




    
    <div className="bg-gray-50 text-gray-800">

      <AgarwalHeader /> 
      <QuoteFormSection />
      <HeroQuoteSection />


      
      <section className="py-12">
        <div className="max-w-5xl mx-auto px-6">
          <h2 className="text-3xl font-bold text-gray-800 mb-6 text-center">Contact Us</h2>
          <p className="text-gray-600 mb-10 text-center max-w-2xl mx-auto">
            Need help with your move? Reach out to us anytime — we’re happy to assist you!
          </p>

          <div className="bg-white rounded-lg shadow-md p-6 md:p-10 grid gap-8 md:grid-cols-2">
            {/* Office Address */}
            <div>
              <h3 className="text-xl font-semibold text-red-600 mb-3">📍 Office Address</h3>
              <p className="text-gray-700 leading-relaxed">
                Plot No E, SHRAVAN Housing Society Ltd,<br />
                Shop No. 21, Ground Floor, 37 to E-40,<br />
                Near Dmart Road, Mall, Sector 9,<br />
                Airoli, Navi Mumbai, Maharashtra – <strong>400708</strong>
              </p>
            </div>

            {/* Contact Info */}
            <div>
              <h3 className="text-xl font-semibold text-red-600 mb-3">📞 Contact Information</h3>
              <p className="text-gray-700 mb-2">
                <span className="font-medium">Phone:</span><br />
                <a href="tel:+919491900300" className="text-blue-600 hover:underline">+91-9491900300</a><br />
                <a href="tel:+919610016002" className="text-blue-600 hover:underline">+91-9610016002</a>
              </p>
              <p className="text-gray-700">
                <span className="font-medium">Email:</span><br />
                <a href="mailto:info@agarwalpackersmovers.in" className="text-blue-600 hover:underline">
                  info@agarwalpackersmovers.in
                </a>
              </p>
            </div>
          </div>
        </div>
      </section>


      <ServiceSection />
      <LocationGrid />



<section className="max-w-5xl mx-auto px-4 py-16">
  <h2 className="text-4xl font-bold text-center text-red-700 mb-10">
    Frequently Asked Questions
  </h2>
  <div className="space-y-4">
    <details className="border border-gray-300 rounded-xl p-5 group transition-all hover:shadow-md">
      <summary className="cursor-pointer text-lg font-semibold text-gray-800 group-open:text-red-700">
        01: WHICH TIME IS THE PREFERSED TIME FOR HOME SHIFTING?
      </summary>
      <div className="mt-3 text-gray-700">
        Generally, if you want to shift from one place to another either for personal or business reasons, you should avoid shifting during political turmoil or when other preferred days for home or office shifting are over. Businessmen find it better to choose the days that the place is less congested to complete shifting quickly and in lesser time. Why shift during political turmoil when you should avoid shifting during normal timings? The basic reason is that during political instability there is a great risk of loss to the owner of the house. The chances of theft and damage to property are very high during political turmoil and it is better to shift during these times. Other days like office shifting or home shifting require you to consider many factors in order to avoid shifting in bad weather or during the peak season. For home shifting, you should know about your local weather conditions as shifting may be difficult during the rainy season if you do not take precautions to prevent damage to your property due to water. So, you should shift to your new home or office in better weather conditions and shift to other locations in good weather conditions only. Moreover, if you know your local climate well, you should avoid shifting in the off-peak seasons to enjoy better discounts on home or office shifting.
      </div>
    </details>

    <details className="border border-gray-300 rounded-xl p-5 group transition-all hover:shadow-md">
      <summary className="cursor-pointer text-lg font-semibold text-gray-800 group-open:text-red-700">
        02: WHY SHOULD YOU BUY TRANSIT INSURANCE FOR THE GOODS WHILE SHIFTING?
      </summary>
      <div className="mt-3 text-gray-700">
        The need for protection when you are shifting your possessions long distance is very high these days. Shifting possessions from one place to another is very common these days and with the increase in population, the number of people moving from place to place is also increasing day by day. While shifting goods long-distance, shifting the goods from one place to another can consume a lot of time, energy, and money and hence shifting the goods by land, sea, or air can be a great problem. Transit insurance helps cover your belongings against damage or loss during transit. Whether for domestic or business purposes, it is important to have the right type of insurance so that you get proper compensation in case of accidents, theft, or loss during the move.
      </div>
    </details>

    <details className="border border-gray-300 rounded-xl p-5 group transition-all hover:shadow-md">
      <summary className="cursor-pointer text-lg font-semibold text-gray-800 group-open:text-red-700">
        03: WHY SHOULD YOU NOT OPT FOR THE LOWEST MOVING QUOTE?
      </summary>
      <div className="mt-3 text-gray-700">
        Opting for the cheapest moving quote may lead to issues such as poor service quality, hidden charges, or even damaged goods. Professional movers provide safety, timely delivery, trained staff, and insurance. Cheap quotes often compromise these aspects, leading to delays, damages, or additional stress. Reliable movers offer customized quotes and clear communication, making your relocation stress-free and more secure.
      </div>
    </details>
  </div>
</section>


      <ReviewSection />
      <AgarwalFooter />
    </div>
  );
}
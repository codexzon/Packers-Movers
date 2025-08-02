'use client'
import Image from 'next/image'
export default function QuoteBannerFooterForm() {
  return (
    <section className="relative w-full h-[600px]">
      {/* Background Image */}
      <div className="absolute inset-0 -z-10">
        <Image
          src="/images/movers-background.jpeg"
          alt="Moving background"
          fill
          className="object-cover"
        />
        <div className="absolute inset-0 bg-black/40" />
      </div>

      {/* Floating Form at the bottom */}
      <div className="absolute bottom-[-10%] w-full flex justify-center px-4">
        <div className="w-full max-w-5xl bg-white/95 backdrop-blur-md shadow-xl rounded-xl p-6 md:p-10">
          <h2 className="text-2xl md:text-3xl font-extrabold text-center text-[#b30d0d] mb-6 uppercase tracking-wide">
            Get Your Moving Quote
          </h2>

          <form className="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm md:text-base">
            <input
              type="text"
              placeholder="Your Name"
              className="p-3 rounded border border-gray-300 focus:ring-2 focus:ring-red-500 outline-none"
            />
            <input
              type="tel"
              placeholder="Phone Number"
              className="p-3 rounded border border-gray-300 focus:ring-2 focus:ring-red-500 outline-none"
            />
            <input
              type="email"
              placeholder="Email Address"
              className="p-3 rounded border border-gray-300 focus:ring-2 focus:ring-red-500 outline-none"
            />
            <input
              type="text"
              placeholder="Move From"
              className="p-3 rounded border border-gray-300 focus:ring-2 focus:ring-red-500 outline-none"
            />
            <input
              type="text"
              placeholder="Move To"
              className="p-3 rounded border border-gray-300 focus:ring-2 focus:ring-red-500 outline-none"
            />
            <input
              type="date"
              className="p-3 rounded border border-gray-300 focus:ring-2 focus:ring-red-500 outline-none"
            />

            <textarea
              placeholder="Message"
              rows={2}
              className="col-span-full p-3 rounded border border-gray-300 focus:ring-2 focus:ring-red-500 outline-none resize-none"
            />

            <div className="col-span-full text-center">
              <button
                type="submit"
                className="bg-gradient-to-r from-red-600 to-orange-500 text-white font-bold py-3 px-8 rounded shadow-md hover:scale-105 transition"
              >
                Submit Quote
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  )
}
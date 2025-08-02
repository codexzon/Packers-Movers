"use client";

import React, { useState } from "react";

export default function ReviewSection() {
  const [showReview, setShowReview] = useState(false);
  const [form, setForm] = useState({ title: "", rating: 0, name: "", review: "" });
  const [reviews, setReviews] = useState([
    {
      title: "Excellent Service",
      rating: 5,
      name: "Anjali Sharma",
      review: "Very professional and reliable service. Highly recommended!",
      date: "18/07/2025"
    },
    {
      title: "Good Experience",
      rating: 4,
      name: "Rahul Verma",
      review: "The team was quick and efficient. Great job overall.",
      date: "15/07/2025"
    },
    {
      title: "Satisfied Customer",
      rating: 5,
      name: "Preeti Desai",
      review: "Everything was smooth from start to finish. Loved it!",
      date: "12/07/2025"
    }
  ]);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setForm((prevForm) => ({ ...prevForm, [name]: value }));
  };

  const handleRating = (rating) => {
    setForm((prevForm) => ({ ...prevForm, rating }));
  };

  const handleSubmit = () => {
    const { title, rating, name, review } = form;
    if (title && rating > 0 && name && review) {
      const newReview = { ...form, date: new Date().toLocaleDateString() };
      setReviews((prevReviews) => [...prevReviews, newReview]);
      setShowReview(false);
      setForm({ title: "", rating: 0, name: "", review: "" });
    } else {
      alert("Please fill out all fields and select a rating.");
    }
  };

  return (
    <div className="bg-white py-10 px-4 sm:px-8">
      <div className="text-center mb-6">
        <h2 className="text-3xl font-bold text-gray-800 mb-4">Customer Reviews</h2>
        <button
          onClick={() => setShowReview(true)}
          className="bg-[#d60000] text-white font-semibold py-2 px-6 rounded-md shadow hover:bg-red-700 transition"
        >
          Write a Review
        </button>
      </div>

      {/* Reviews Display */}
      <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
        {reviews.length === 0 ? (
          <p className="text-center text-gray-500 col-span-full">No reviews yet. Be the first to share!</p>
        ) : (
          reviews.map((review, index) => (
            <div
              key={index}
              className="bg-gray-100 p-5 rounded-xl shadow-sm hover:shadow-md transition duration-200"
            >
              <h4 className="text-lg font-semibold text-gray-800">{review.title}</h4>
              <div className="text-yellow-400 text-sm mb-2">
                {"★".repeat(review.rating)}
                {"☆".repeat(5 - review.rating)}
              </div>
              <p className="text-sm text-gray-700 mb-2">{review.review}</p>
              <div className="text-xs text-gray-500">- {review.name}, {review.date}</div>
            </div>
          ))
        )}
      </div>

      {/* Review Modal */}
      {showReview && (
        <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
          <div className="bg-white w-full max-w-md rounded-lg p-6 relative">
            <button
              className="absolute top-2 right-3 text-gray-500 hover:text-black text-xl"
              onClick={() => setShowReview(false)}
            >
              ×
            </button>
            <h3 className="text-lg font-semibold mb-4">Write Your Review</h3>

            <input
              type="text"
              name="title"
              placeholder="Enter Title"
              value={form.title}
              onChange={handleChange}
              className="w-full border border-gray-300 rounded px-3 py-2 mb-3"
            />

            <div className="flex items-center gap-1 mb-3">
              {[1, 2, 3, 4, 5].map((star) => (
                <span
                  key={star}
                  onClick={() => handleRating(star)}
                  className={`text-2xl cursor-pointer ${form.rating >= star ? "text-yellow-400" : "text-gray-300"}`}
                >
                  ★
                </span>
              ))}
            </div>

            <input
              type="text"
              name="name"
              placeholder="Enter Name"
              value={form.name}
              onChange={handleChange}
              className="w-full border border-gray-300 rounded px-3 py-2 mb-3"
            />

            <textarea
              name="review"
              placeholder="Enter Your Review..."
              value={form.review}
              onChange={handleChange}
              rows="4"
              className="w-full border border-gray-300 rounded px-3 py-2 mb-3"
            ></textarea>

            <button
              onClick={handleSubmit}
              className="w-full bg-[#d60000] text-white py-2 rounded-md hover:bg-red-700"
            >
              Submit
            </button>
          </div>
        </div>
      )}
    </div>
  );
}
